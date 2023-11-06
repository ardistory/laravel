<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MiddlewareTest extends TestCase
{
    public function testInvalid()
    {
        $this->get('/middleware/cekheader')
            ->assertStatus(401)
            ->assertSeeText('Access Denied');
    }

    public function testValid()
    {
        $this->withHeader('X-AUTHOR', 'ardiStory')
            ->get('/middleware/cekheader')
            ->assertStatus(200)
            ->assertSeeText('OK');
    }
}
