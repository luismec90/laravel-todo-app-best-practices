<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditTasksTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function editing_a_task()
    {
        $user = factory(App\User::class)->create();

        $task = factory(App\Task::class)->create(['user_id'=>$user->id]);

        $this->actingAs($user)
            ->visit('/')
            ->see('To do list')
            ->click('Edit')
            ->type('Go to the shop', 'title')
            ->type('Buy milk', 'description')
            ->press('Update')
            ->see('Task updated successfully.');
    }
}
