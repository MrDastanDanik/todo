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
        $users = User::all();

        foreach ($users as $user) {
            factory(Task::class, rand(0, 10))->create(['user_id' => $user->id]);
        }
    }
}