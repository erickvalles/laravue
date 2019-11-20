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
        \App\User::create([
            'name'=>'Erick',
            'email'=>'erickg@valles.udg.mx',
            'password'=>bcrypt('hola')
        ]);
    }
}
