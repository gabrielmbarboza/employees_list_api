<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
        App\User::create([
            'name' => 'gabrielmbarboza',
            'email' => 'dev@gabrielmbarboza.com',
            'password' => Hash::make( 's3cr3t' )
        ]);
    }
}
