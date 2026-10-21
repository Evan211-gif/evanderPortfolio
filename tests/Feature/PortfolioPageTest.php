<?php

use App\Models\PortfolioProfile;
use App\Models\Project;
use App\Models\Service;
use App\Models\SocialLink;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('the home page renders published portfolio data from the database', function () {
    PortfolioProfile::factory()->create([
        'name' => 'Evander Dayoc',
        'headline' => 'Aspiring Developer',
        'intro' => 'Learning Laravel.',
        'about' => 'Building practical software.',
    ]);
    Service::factory()->create([
        'title' => 'Web Development',
        'display_order' => 1,
    ]);
    Service::factory()->create([
        'title' => 'Unpublished Service',
        'is_published' => false,
    ]);
    Project::factory()->create([
        'title' => 'Enrollment System',
        'display_order' => 1,
    ]);
    Project::factory()->create([
        'title' => 'Unpublished Project',
        'is_published' => false,
    ]);
    SocialLink::factory()->create([
        'label' => 'GitHub',
        'url' => 'https://github.com/Evan211-gif',
        'icon_class' => 'fab fa-github',
    ]);

    $response = $this->get('/');

    $response
        ->assertOk()
        ->assertSee('Evander Dayoc')
        ->assertSee('Aspiring Developer')
        ->assertSee('Building practical software.')
        ->assertSee('Web Development')
        ->assertSee('Enrollment System')
        ->assertSee('https://github.com/Evan211-gif')
        ->assertDontSee('Unpublished Service')
        ->assertDontSee('Unpublished Project');
});

test('database seeding supplies initial portfolio content', function () {
    $this->seed();

    $this->get('/')
        ->assertOk()
        ->assertSee('Evander Dayoc')
        ->assertSee('Student Enrollment System')
        ->assertSee('GitHub')
        ->assertSee('Facebook')
        ->assertSee('https://www.facebook.com/evan0720')
        ->assertSee('LinkedIn')
        ->assertSee('https://www.linkedin.com/in/evander-dayoc-600bab36a/')
        ->assertSee('mailto:evander.dayoc@gmail.com');
});
