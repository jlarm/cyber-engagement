<?php

namespace App\Livewire\Campaign;

use App\Models\Campaign;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $sortBy = 'name';
    public $sortDirection = 'desc';

    public function sort($column): void
    {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    #[Computed]
    public function campaigns()
    {
        return cache()->remember(
            "campaigns.{$this->sortBy}.{$this->sortDirection}." . $this->getPage(),
            now()->addMinutes(60),
            fn () => Campaign::query()
                ->tap(fn ($query) => $this->sortBy ? $query->orderBy($this->sortBy, $this->sortDirection) : $query)
                ->paginate(20)
        );
    }

    public function render()
    {
        return view('livewire.campaign.index');
    }
}
