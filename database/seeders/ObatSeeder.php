<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obats = [
            [
                'nama' => 'Paracetamol',
                'dosis' => '500mg',
                'jenis' => 'Tablet',
                'efek_samping' => 'Mual, Pusing',
            ],
            [
                'nama' => 'Antasida',
                'dosis' => '1-2 sendok makan',
                'jenis' => 'Sirup',
                'efek_samping' => 'Kembung, Diare',
            ],
            [
                'nama' => 'Ibuprofen',
                'dosis' => '400mg',
                'jenis' => 'Kapsul',
                'efek_samping' => 'Mual, Sakit perut',
            ],
            [
                'nama' => 'Loratadin',
                'dosis' => '10mg',
                'jenis' => 'Tablet',
                'efek_samping' => 'Kantuk, Mulut kering',
            ],
            [
                'nama' => 'Cetirizine',
                'dosis' => '10mg',
                'jenis' => 'Tablet',
                'efek_samping' => 'Mual, Pusing',
            ],
            [
                'nama' => 'Omeprazole',
                'dosis' => '20mg',
                'jenis' => 'Kapsul',
                'efek_samping' => 'Sakit kepala, Diare',
            ],
            [
                'nama' => 'Lansoprazole',
                'dosis' => '30mg',
                'jenis' => 'Kapsul',
                'efek_samping' => 'Mual, Mulut kering',
            ],
            [
                'nama' => 'Salbutamol',
                'dosis' => '2mg',
                'jenis' => 'Tablet',
                'efek_samping' => 'Jantung berdebar, Pusing',
            ],
            [
                'nama' => 'Diclofenac',
                'dosis' => '50mg',
                'jenis' => 'Tablet',
                'efek_samping' => 'Gangguan pencernaan, Sakit kepala',
            ],
            [
                'nama' => 'Dextromethorphan',
                'dosis' => '10mg',
                'jenis' => 'Sirup',
                'efek_samping' => 'Sedasi, Keringat berlebih',
            ],
        ];
        DB::table('obats')->insert($obats);
    }
}
