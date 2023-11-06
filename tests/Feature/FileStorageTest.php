<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FileStorageTest extends TestCase
{
    public function testStorageFile()
    {
        $fileSystem = Storage::disk("local");
        $fileSystem->put("file.txt", "ardiStory");

        $content = $fileSystem->get("file.txt");

        $this->assertEquals("ardiStory", $content);
    }
}
