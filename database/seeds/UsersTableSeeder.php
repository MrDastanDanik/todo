<?php
/**
 * Created by PhpStorm.
 * User: dastan
 * Date: 5/12/18
 * Time: 10:29 PM
 */

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();
    }
}