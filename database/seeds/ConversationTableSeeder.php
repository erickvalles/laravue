<?php

use Illuminate\Database\Seeder;

class ConversationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Coversation::create([
            'user_id'=>1,
            'contact_id'=>2,
            'last_message'=>null,
            'last_time'=>null,
        ]);

        \App\Coversation::create([
            'user_id'=>2,
            'contact_id'=>1,
            'last_message'=>null,
            'last_time'=>null,
        ]);
    }
}
