<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TtkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ttks = [
            [
                'nama_lengkap' => 'John Doe',
                'no_registrasi' => 'REG123456',
            ],
            [
                'nama_lengkap' => 'Jane Smith',
                'no_registrasi' => 'REG987654',
            ],
            [
                'nama_lengkap' => 'Michael Johnson',
                'no_registrasi' => 'REG456789',
            ],
        ];

        DB::table('ttks')->insert($ttks);
    }
}
