<?php

namespace App\Tests;

use App\Repository\UserRepository;
use App\Tests\AbstractKernelTestCase;

class UserControllerTest extends AbstractKernelTestCase
{

    public function testGetUserList(): void
    {
        $repo = $this->getRepository(UserRepository::class);
        $userList = $repo->findAll();
        $this->assertEquals(count($userList), 4);
    }
}
