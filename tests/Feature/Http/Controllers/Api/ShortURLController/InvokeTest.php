<?php

namespace Tests\Feature\Http\Controllers\Api\ShortURLController;

use AshAllenDesign\ShortURL\Classes\KeyGenerator;
use AshAllenDesign\ShortURL\Models\ShortURL;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Mockery\MockInterface;
use Tests\TestCase;

class InvokeTest extends TestCase
{
    use LazilyRefreshDatabase;

    /**
     * @test
     * @testWith ["https://example.com"]
     *           ["http://example.com"]
     */
    public function short_url_can_be_created(string $destinationUrl): void
    {
        $this->mock(KeyGenerator::class, function (MockInterface $mock): void {
            $mock->shouldReceive('generateRandom')
                ->once()
                ->andReturn('hello123');
        });

        $this->freezeTime();

        $postData = [
            'destination_url' => $destinationUrl,
        ];

        $response = $this->post(route('api.short-url'), $postData)
            ->assertCreated();

        $shortUrl = ShortURL::first();

        $response->assertJson([
            'id' => $shortUrl->id,
            'destination_url' => $destinationUrl,
            'url' => 'http://localhost/s/hello123',
            'redirect_status_code' => 301,
            'created_at' => $shortUrl->created_at->toISOString(),
        ]);

        $this->assertDatabaseHas('short_urls', [
            'destination_url' => $destinationUrl,
            'default_short_url' => 'http://localhost/s/hello123',
            'url_key' => 'hello123',
            'single_use' => false,
            'forward_query_params' => false,
            'redirect_status_code' => 301,
            'track_visits' => false,
            'track_ip_address' => false,
            'track_operating_system' => false,
            'track_operating_system_version' => false,
            'track_browser' => false,
            'track_browser_version' => false,
            'track_referer_url' => false,
            'track_device_type' => false,
            'activated_at' => now(),
            'deactivated_at' => null,
        ]);
    }

    /**
     * @test
     * @testWith ["example.com"]
     *           ["ftp://hello.com"]
     *           ["invalid"]
     */
    public function error_is_returned_if_the_destination_url_is_invalid(): void
    {
        $postData = [
            'destination_url' => 'example.com',
        ];

        $this->postJson(route('api.short-url'), $postData)
            ->assertStatus(422)
            ->assertExactJson([
                'errors' => [
                    'destination_url' => [
                        'The destination_url must be a valid URL.'
                    ],
                ],
                'message' => 'The destination_url must be a valid URL.',
            ]);
    }
}
