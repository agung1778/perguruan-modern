<?php

namespace Tests\Feature;

use App\Models\About;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AboutRecordTest extends TestCase
{
    use RefreshDatabase;

    public function test_about_record_can_store_required_content_fields(): void
    {
        $about = About::query()->create([
            'title' => 'Tentang Perguruan Amaliah',
            'description' => 'Deskripsi singkat perguruan.',
            'history' => 'Sejarah perguruan.',
            'vision' => 'Visi perguruan.',
            'mission' => 'Misi perguruan.',
            'image' => 'about/example.jpg',
            'established' => '1983',
        ]);

        $this->assertDatabaseHas('abouts', [
            'id' => $about->id,
            'title' => 'Tentang Perguruan Amaliah',
            'established' => '1983',
        ]);
    }
}
