<flux:table :paginate="$this->campaigns">
    <flux:columns>
        <flux:column>Name</flux:column>
        <flux:column>Email</flux:column>
    </flux:columns>
    <flux:rows>
        @foreach ($this->campaigns as $campaign)
            <livewire:campaign.index-item :$campaign :key="$campaign->id" />
        @endforeach
    </flux:rows>
</flux:table>
