<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MovieRepositoryTest extends TestCase
{
    public function test_get_all_returns_expected_result(): void
    {
        $repository = new \App\MovieRepository();
        $movies = $repository->getAll();

        $this->assertSame([
            'The Shawshank redemption',
            'The Godfather',
        ], $movies);
    }
}
