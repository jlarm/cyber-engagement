<?php

namespace App\Livewire\Campaign;

use App\Models\Campaign;
use Livewire\Component;

class IndexItem extends Component
{
    public Campaign $campaign;

    public function render()
    {
        return view('livewire.campaign.index-item');
    }
}
