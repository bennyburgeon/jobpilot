<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NotificationMailTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        // new edited job available notification
        // Illuminate\Support\Facades\Notification::send(
        //     App\Models\Admin::first(),
        //     new App\Notifications\Admin\NewEditedJobAvailableNotification(App\Models\Admin::first(), App\Models\Job::first())
        // );

        $response->assertStatus(200);
    }
}
