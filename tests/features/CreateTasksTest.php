<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateTasksTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function creating_a_task()
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
