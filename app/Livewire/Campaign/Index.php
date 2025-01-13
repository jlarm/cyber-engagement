<?php

namespace App\Livewire\Campaign;

use App\Models\Campaign;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Computed]
    public function campaigns()
    {
        return Campaign::query()->paginate(20);
    }

    public function render(): View
    {
        return view('livewire.campaign.index');
    }
}
