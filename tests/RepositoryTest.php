<?php

namespace Dugajean\Repositories\Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;

class RepositoryTest extends TestCase
{
    protected $mock;

    protected $repository;

    public function setUp(): void
    {
        $this->mock = m::mock('Illuminate\Database\Eloquent\Model');
    }

    public function testRepository()
    {
        $this->assertTrue(true);
    }
}
