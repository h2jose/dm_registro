<?php

use Illuminate\Database\Seeder;

class SuscribersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Suscriber::class,10)->create();
    }
}
