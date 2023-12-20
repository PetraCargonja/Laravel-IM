<?php

namespace App\Tests\Videstore\Entity;

use App\Videostore\Entity\Genre;

class GenreTest extends \PHPUnit\Framework\TestCase
{
    public function testGetInfo()
    {
        $genre = new Genre();
        $genre->id_zanr = 100;
        $genre->naziv = 'Action';

        $this->assertSame('ID: 100, name: Action', $genre->getInfo());
    }
}