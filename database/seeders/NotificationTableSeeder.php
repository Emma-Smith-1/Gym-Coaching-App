<?php

namespace Database\Seeders;

use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $n = new Notification;
        $n->user_id = 1;
        $n->post_id = 1;
        $n->notification_type = "comment";
        $n->notification_text = "commented on your post";
        $n->notification_time = Carbon::now();
        $n->been_read = "unread";
        $n->username = "bob123";
        $n->save();

        Notification::factory()->count(12)->create();
    }
}
