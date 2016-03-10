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
        factory(App\User::class)->create([
            'name' => 'datamedic',
            'email' => 'datamedic@mail.com',
            'password' => 'pereira'

        ]);
    }
}
