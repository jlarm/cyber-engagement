<?php

namespace App\Livewire\Campaign;

use Livewire\Component;

class Form extends Component
{
    public string $firstName = '';
    public string $lastName = '';
    public string $email = '';

    public function rules(): array
    {
        return [
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
        ];
    }

    public function render()
    {
        return view('livewire.campaign.form');
    }
}
