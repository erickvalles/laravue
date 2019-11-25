<?php

use Illuminate\Database\Seeder;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Message::create([
            'from_id'=>1,
            'to_id'=>2,
            'content'=>"Algún mensaje"
        ]);
        \App\Message::create([
            'from_id'=>2,
            'to_id'=>1,
            'content'=>"Ahí andamos"
        ]);
    }
}
