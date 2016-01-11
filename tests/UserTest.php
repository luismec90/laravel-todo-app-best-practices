<?php

use App\User;
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
            ->seePageIs('/');
    }

    /** @test */
    public function it_can_login()
    {
        $user = factory(App\User::class)->create(['password' => bcrypt('123456')]);

        $this->visit('/login')
            ->type($user->email, 'email')
            ->type('123456', 'password')
            ->press('Login')
            ->seePageIs('/');
    }

    /** @test */
    public function it_can_create_a_task()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/')
            ->see('To do list')
            ->click('Create a new task')
            ->type('Go to the bank', 'title')
            ->type('Pay bills', 'description')
            ->press('Create')
            ->see('Task created successfully.');
    }
}
