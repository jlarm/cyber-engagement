<flux:table :paginate="$this->campaigns">
    <flux:columns>
        <flux:column sortable :sorted="$sortBy === 'name'" :direction="$sortDirection" wire:click="sort('name')">
            Name
        </flux:column>
        <flux:column sortable :sorted="$sortBy === 'email'" :direction="$sortDirection" wire:click="sort('email')">
            Email
        </flux:column>
    </flux:columns>
    <flux:rows>
        @foreach ($this->campaigns as $campaign)
            <livewire:campaign.index-item :$campaign :key="$campaign->id" />
        @endforeach
    </flux:rows>
</flux:table>
