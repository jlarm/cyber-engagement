<?php

use App\Livewire\Campaign\Index;
use App\Models\Campaign;
use App\Models\User;

it('can see dashboard if logged in', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get(route('dashboard'))
        ->assertOk();
});

it('cannot see dashboard if not logged in', function () {
    $this->get(route('dashboard'))
        ->assertRedirect(route('login'));
});

it('can see index component', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get(route('dashboard'))
        ->assertSeeLivewire(Index::class);
});

it('can see list of campaigns', function () {
    $user = User::factory()->create();

    Campaign::factory()->count(3)->create();

    $this->actingAs($user)
        ->get(route('dashboard'))
        ->assertSeeLivewire(Index::class);

    $this->assertDatabaseCount('campaigns', 3);
});
