<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FilterInputTest extends TestCase
{
    public function testFilterInput()
    {
        $this->post('/onlyinput', [
            'username' => 'ardi',
            'password' => 'rahasia',
            'umur' => '22'
        ])->assertSeeText('username')
            ->assertSeeText('rahasia');
    }
}
