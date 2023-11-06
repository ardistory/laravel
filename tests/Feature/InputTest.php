<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InputTest extends TestCase
{
    public function testInput()
    {
        $this->get('/hello?name=ardi')
            ->assertSeeText('Hello ardi');

        $this->post('/hello', ['name' => 'ardiansyah'])
            ->assertSeeText('Hello ardiansyah');
    }
}
