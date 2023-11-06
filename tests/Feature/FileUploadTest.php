<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class FileUploadTest extends TestCase
{
    public function testUploadFile()
    {
        $picture = UploadedFile::fake()->image("ardi.png");

        $this->post('/file/upload', [
            'picture' => $picture
        ])->assertSeeText('Berhasil Upload : ardi.png');
    }
}
