<?php

namespace Tests\Feature;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MovieControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_create(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/movies/create');

        $response->assertOk();
        $response->assertSee('Unesi novi film');
        $response->assertSee('Naziv');
        $response->assertSee('Godina');
        $response->assertSee('Zanr');
    }

    public function test_store(): void
    {
        $user = User::factory()->create();
        $genre = Genre::factory()->create();

        $response = $this->actingAs($user)->post('/movies', [
            'name' => 'Testni film',
            'year' => 2021,
            'genre' => $genre->id,
        ]);

        $response->assertRedirect('/movies');
        $this->assertDatabaseHas('film', [
            'naziv' => 'Testni film',
            'godina' => 2021,
            'id_zanr' => $genre->id,
        ]);
    }

    public function test_index(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/movies');

        $response->assertOk();
    }

    public function test_show(): void
    {
        $user = User::factory()->create();
        $movie = Movie::factory()->create();

        $response = $this->actingAs($user)->get("/movies/{$movie->id_film}");

        $response->assertOk();
        $response->assertSee('Testni film');
        $response->assertSee('2021');
        $response->assertSee('Back to movies');
    }

    public function test_destroy(): void
    {
        $user = User::factory()->create();
        $movie = Movie::factory()->create();

        $response = $this->actingAs($user)->delete("/movies/{$movie->id_film}");

        $response->assertRedirect('/movies');
        $this->assertDatabaseMissing('film', [
            'id_film' => $movie->id_film,
        ]);
    }
}
