<?php

use Illuminate\Database\Seeder;

class Employees extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $position_type = App\PositionType::find(1);
        
        $data = [
            ["first_name"=>"Gabriel", "last_name"=>"Barboza", "nickname"=>"Gabriel","phone"=>"27999999999", "position_type_id" => $position_type->id ]
        ];
        
        DB::table('employees')->insert($data);
    }
}
