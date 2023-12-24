<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CUsersDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1,
                'document_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'document_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'document_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'document_id' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'document_id' => 5,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'document_id' => 6,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'document_id' => 7,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'document_id' => 8,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 2,
                'document_id' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 2,
                'document_id' => 2,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 2,
                'document_id' => 3,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 2,
                'document_id' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 2,
                'document_id' => 5,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 2,
                'document_id' => 6,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 2,
                'document_id' => 7,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 2,
                'document_id' => 8,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 3,
                'document_id' => 9,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 3,
                'document_id' => 10,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 3,
                'document_id' => 11,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 3,
                'document_id' => 12,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 3,
                'document_id' => 13,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 3,
                'document_id' => 14,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 3,
                'document_id' => 15,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 3,
                'document_id' => 16,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 4,
                'document_id' => 9,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 4,
                'document_id' => 10,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 4,
                'document_id' => 11,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 4,
                'document_id' => 12,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 4,
                'document_id' => 13,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 4,
                'document_id' => 14,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 4,
                'document_id' => 15,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 4,
                'document_id' => 16,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 5,
                'document_id' => 18,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 5,
                'document_id' => 19,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 5,
                'document_id' => 20,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 5,
                'document_id' => 21,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 5,
                'document_id' => 22,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 6,
                'document_id' => 18,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 6,
                'document_id' => 19,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 6,
                'document_id' => 20,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 6,
                'document_id' => 21,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 6,
                'document_id' => 22,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 1,
                'document_id' => 17,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 2,
                'document_id' => 17,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 3,
                'document_id' => 17,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 4,
                'document_id' => 17,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 5,
                'document_id' => 17,
                'created_at' => Carbon::now()
            ],
            [
                'user_id' => 6,
                'document_id' => 17,
                'created_at' => Carbon::now()
            ],

        ];
        DB::table('c_users_documents')->insert($data);
    }
}
