<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $keluhans = [
            // [
            //     'pelanggan_id' => '1',
            //     'ttk_id' => '2',
            //     'keluhan' => 'Sakit kepala, meriang',
            //     'diagnosa' => 'Demam',
            //     'saran' => 'Jaga pola makan',
            // ],
            [
                'pelanggan_id' => '2',
                'ttk_id' => '3',
                'keluhan' => 'Nyeri perut, mual',
                'diagnosa' => 'Gastritis',
                'saran' => 'Hindari makanan pedas',
            ],
            [
                'pelanggan_id' => '3',
                'ttk_id' => '1',
                'keluhan' => 'Batuk kering, tenggorokan gatal',
                'diagnosa' => 'Tonsilitis',
                'saran' => 'Istirahat yang cukup',
            ],
            [
                'pelanggan_id' => '4',
                'ttk_id' => '4',
                'keluhan' => 'Mata berair, gatal',
                'diagnosa' => 'Konjungtivitis',
                'saran' => 'Hindari menggosok mata',
            ],
            [
                'pelanggan_id' => '5',
                'ttk_id' => '2',
                'keluhan' => 'Nyeri punggung, kesemutan',
                'diagnosa' => 'Punggung kaku',
                'saran' => 'Lakukan peregangan rutin',
            ],
            [
                'pelanggan_id' => '6',
                'ttk_id' => '3',
                'keluhan' => 'Sesak napas, batuk berdahak',
                'diagnosa' => 'Bronkitis',
                'saran' => 'Hindari udara dingin',
            ],
            [
                'pelanggan_id' => '7',
                'ttk_id' => '1',
                'keluhan' => 'Nyeri sendi, bengkak',
                'diagnosa' => 'Arthritis',
                'saran' => 'Lakukan olahraga ringan',
            ],
            [
                'pelanggan_id' => '8',
                'ttk_id' => '4',
                'keluhan' => 'Sakit gigi, bengkak',
                'diagnosa' => 'Abses gigi',
                'saran' => 'Berkonsultasi dengan dokter gigi',
            ],
            [
                'pelanggan_id' => '9',
                'ttk_id' => '2',
                'keluhan' => 'Sulit tidur, gelisah',
                'diagnosa' => 'Insomnia',
                'saran' => 'Ciptakan suasana tidur yang nyaman',
            ],
            [
                'pelanggan_id' => '10',
                'ttk_id' => '3',
                'keluhan' => 'Perut kembung, sering bersendawa',
                'diagnosa' => 'Dispepsia',
                'saran' => 'Hindari makan terlalu cepat',
            ],
        ];
        DB::table('keluhans')->insert($keluhans);
    }
}
