<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function it_can_register()
    {
        $this->visit('/register')
            ->type('John Doe', 'name')
            ->type('john@exmple.com', 'email')
            ->type('123456', 'password')
            ->type('123456', 'password_confirmation')
            ->press('Register')
            ->seePageIs('home');
    }

    public function it_can_login()
    {
        $this->visit('/login')
            ->type('john@exmple.com', 'email')
            ->type('123456', 'password')
            ->press('Login')
            ->seePageIs('home');
    }
}
