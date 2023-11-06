<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfiguration()
    {
        $this->assertEquals("ardiStory", config("contoh.author"));
        $this->assertEquals("Ardi", config("contoh.nama.depan"));
        $this->assertEquals("Putra", config("contoh.nama.belakang"));
    }
}
