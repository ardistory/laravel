<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostInputTest extends TestCase
{
    public function testPostInput()
    {
        $this->get('/validation?password=ardi123')
            ->assertSeeText('Selamat datang!');

        $this->post('/validation', [
            'password' => 'ardi123'
        ])->assertSeeText('Password salah!');
    }
}
