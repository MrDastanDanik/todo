<?php
/**
 * Created by PhpStorm.
 * User: dastan
 * Date: 5/13/18
 * Time: 12:32 AM
 */

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function ($user) {
            /** @var User $user */
            factory(Task::class, 25)->states('random_done')->create([
                'user_id' => $user->id,
            ]);
        });
    }
}