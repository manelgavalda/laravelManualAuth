<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Funció que ens plena la taula Users.
        $this->call(UsersTableSeeder::class);
    }
}
