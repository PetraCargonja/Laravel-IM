<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class DatabaseConnectionTest extends TestCase
{
    public function test_connect_returns_expected_result(): void
    {
        $connection = new \App\DatabaseConnection();
        $this->assertTrue($connection->connect());
    }
}
