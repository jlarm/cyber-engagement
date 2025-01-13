<?php

namespace App\Livewire\Campaign;

use App\Models\Campaign;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;
use Livewire\Component;
use Spatie\MailcoachSdk\Mailcoach;

class Form extends Component
{
    public string $firstName = '';
    public string $lastName = '';
    public string $email = '';

    public function create(): void
    {
        $this->validate();
        $this->createCampaign();
        $this->subscribeToMailCoach();
        $this->setCookie();

        $this->redirect('/');
    }

    public function rules(): array
    {
        return [
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
        ];
    }

    public function render(): View
    {
        return view('livewire.campaign.form');
    }

    private function createCampaign(): void
    {
        Campaign::firstOrCreate(
            ['email' => $this->email],
            [
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
            ]
        );
    }

    private function subscribeToMailCoach(): void
    {
        $mailCoach = new Mailcoach(
            config('mailcoach.mailcoach.api_token'),
            config('mailcoach.mailcoach.endpoint'),
        );

        $list = $mailCoach->emailList(config('mailcoach.mailcoach.subscriber_uuid'));

        if ($list->subscriber($this->email) === null) {
            $mailCoach->createSubscriber(
                config('mailcoach.mailcoach.subscriber_uuid'),
                [
                    'first_name' => $this->firstName,
                    'last_name' => $this->lastName,
                    'email' => $this->email,
                ]
            );
        }
    }

    private function setCookie(): void
    {
        Cookie::queue('submitted', 'true', 60 * 24 * 30);
    }
}
