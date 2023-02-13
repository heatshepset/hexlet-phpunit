<?php

declare(strict_types=1);

namespace Php\Package\Tests;

use PHPUnit\Framework\TestCase;
use Php\Package\User;

class UserTest extends TestCase
{
    /**
     * @return void
     */
    public function testGetName(): void
    {
        $name = 'john';
        $children = [new User('Mark')];
        $user = new User($name, $children);

        $this->assertEquals($name, $user->getName());
        $this->assertEquals(collect($children), $user->getChildren());
    }
}
