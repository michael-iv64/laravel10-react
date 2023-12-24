<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'fullname' => 'Саша Рыбак',
                'email' => 'sasha_fish@mail.ru',
                'created_at' => Carbon::now(),
            ],
            [
                'fullname' => 'Гриша Рыбак',
                'email' => 'grisha_fish@mail.ru',
                'created_at' => Carbon::now(),
            ],
            [
                'fullname' => 'Петя Охотник',
                'email' => 'petia_animal@mail.ru',
                'created_at' => Carbon::now(),
            ],
            [
                'fullname' => 'Федя Охотник',
                'email' => 'fedia_animal@mail.ru',
                'created_at' => Carbon::now(),
            ],
            [
                'fullname' => 'Маша Ботаник',
                'email' => 'masha_vegetable@mail.ru',
                'created_at' => Carbon::now(),
            ],
            [
                'fullname' => 'Катя Ботаник',
                'email' => 'katia_vegetable@mail.ru',
                'created_at' => Carbon::now(),
            ],

        ];

        DB::table('c_users')->insert($data);
    }
}
