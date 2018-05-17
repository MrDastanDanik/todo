<?php
/**
 * Created by PhpStorm.
 * User: dastan
 * Date: 5/13/18
 * Time: 12:32 AM
 */

use App\Models\Task;
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
        factory(Task::class, 10)->create();
    }
}