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
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => "User $i",
                'email' => "user$i@todo.local",
                'password' => Hash::make("password$i"),
            ]);
        }
    }
}