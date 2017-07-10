<?php

use Illuminate\Database\Seeder;

class PositionTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Owner', 'description'=>"Pay your salary and don't know why"],
            ['name'=>'Manager', 'description'=> "Think that pay your salary! But not!"],
            ['name'=>'Analyst', 'description'=> "I'm still trying find a definition!"],
            ['name'=>'Developer', 'description'=> "Always enjoys the best coffee and generally its have nightmares with bugs"],
            ['name'=>'Fullstack', 'description'=> "It's a simplest definition for God Developer"],
            ['name'=>'Designer', 'description' => "Rainbows, unicorns and cute rabbits"]
        ];
        
        DB::table('position_types')->insert($data);
    }
}
