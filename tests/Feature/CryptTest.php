<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Crypt;
use Tests\TestCase;

class CryptTest extends TestCase
{
    public function testCrypt()
    {
        $encrypt = Crypt::encrypt("ardiStory");
        $decrypt = Crypt::decrypt($encrypt);

        $this->assertEquals("ardiStory", $decrypt);
    }
}
