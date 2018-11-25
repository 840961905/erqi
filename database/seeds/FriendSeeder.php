<?php

use Illuminate\Database\Seeder;

class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 30 ; $i++) { 
        DB::table('friend')->insert([
            'fname' => str_random(10),
            'href' => str_random(10).'.com',
            'addtime' => time()
        ]);
    }
    }
}
