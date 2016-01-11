<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskTest extends TestCase
{
    /** @test */
    public function create_a_task()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/')
            ->see('To do list')
            ->click('Create a new task')
            ->see('Asdfgh');
    }
}
