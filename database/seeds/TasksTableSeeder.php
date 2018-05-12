<?php
/**
 * Created by PhpStorm.
 * User: dastan
 * Date: 5/13/18
 * Time: 12:32 AM
 */

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
        $user = User::first();
        for ($i = 0; $i < 10; $i++) {
            $user->tasks()->create([
                'text' => "task $i"
            ]);
        }
    }
}