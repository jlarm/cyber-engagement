<form wire:submit="create" class="space-y-3">
    <div class="grid grid-cols-2 gap-3">
        <flux:field>
            <flux:label>First Name</flux:label>

            <flux:input wire:model="firstName" type="firstName" required />

            <flux:error name="firstName" />
        </flux:field>

        <flux:field>
            <flux:label>Last Name</flux:label>

            <flux:input wire:model="lastName" type="lastName" required />

            <flux:error name="lastName" />
        </flux:field>
    </div>

    <flux:field>
        <flux:label>Email</flux:label>

        <flux:input wire:model="email" type="email" required />

        <flux:error name="email" />
    </flux:field>

    <div>
        <x-turnstile wire:model="captcha" />
        <flux:error name="captcha" />
    </div>

    <flux:button type="submit" variant="primary">Submit</flux:button>
</form>
