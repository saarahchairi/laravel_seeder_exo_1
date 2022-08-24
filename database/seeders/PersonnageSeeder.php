<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PersonnageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnages')->insert([
        [
            'prenom' => 'Sami',
            'age' => 23,
            'email' => 'abc@gmail.com',
            'telephone' => 412345678,
        ],
        [
            'prenom' => 'Nisrine',
            'age' => 19,
            'email' => 'abc@gmail.com',
            'telephone' => 987654567,
        ],
        [
            'prenom' => 'Nassim',
            'age' => 12,
            'email' => 'abc@gmail.com',
            'telephone' => 678908689,
        ]
        ]);
    }
}
