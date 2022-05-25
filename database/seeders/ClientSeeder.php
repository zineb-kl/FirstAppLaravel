<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert(
            [
                'name'=>'Bazza Ahmed ',
                'phone'=>'+212 678896065',
                'email'=>'BazzaAhmed@gmail.com',
                
                'adresse'=>'Hay ElQuds Oujda'
            ]
        );
    }
}
