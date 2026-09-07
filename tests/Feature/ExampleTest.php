<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_home_page_is_available(): void
    {
        $this->get('/')->assertOk();
    }

    public function test_home_page_displays_development_principles(): void
    {
        $this->get('/')
            ->assertSee('Kolaborasi')
            ->assertSee('Otomasi')
            ->assertSee('Pembelajaran');
    }
}
