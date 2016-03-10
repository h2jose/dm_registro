<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        factory(App\User::class)->create([
            'name' => 'stand',
            'email' => 'yo@mail.com',
            'password' => bcrypt('12344321'),

        ]);
    }
}
