<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    public function testEnvironment()
    {
        $env = Env::get("AUTHOR");

        $this->assertEquals("ardiStory", $env);
    }
}
