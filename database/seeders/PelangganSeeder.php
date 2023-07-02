<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelanggans = [
            [
                'username' => 'john_doe',
                'nama_lengkap' => 'John Doe',
                'alamat' => 'Jl. Sudirman No. 123',
                'umur' => '35',
                'jenis_kelamin' => 'Laki-laki',
            ],
            [
                'username' => 'jane_smith',
                'nama_lengkap' => 'Jane Smith',
                'alamat' => 'Jl. Gatot Subroto No. 456',
                'umur' => '28',
                'jenis_kelamin' => 'Perempuan',
            ],
            [
                'username' => 'michael_brown',
                'nama_lengkap' => 'Michael Brown',
                'alamat' => 'Jl. Thamrin No. 789',
                'umur' => '42',
                'jenis_kelamin' => 'Laki-laki',
            ],
            [
                'username' => 'sarah_jackson',
                'nama_lengkap' => 'Sarah Jackson',
                'alamat' => 'Jl. Merdeka No. 10',
                'umur' => '31',
                'jenis_kelamin' => 'Perempuan',
            ],
            [
                'username' => 'david_wilson',
                'nama_lengkap' => 'David Wilson',
                'alamat' => 'Jl. Kebon Sirih No. 21',
                'umur' => '37',
                'jenis_kelamin' => 'Laki-laki',
            ],
            [
                'username' => 'emily_thompson',
                'nama_lengkap' => 'Emily Thompson',
                'alamat' => 'Jl. Diponegoro No. 55',
                'umur' => '29',
                'jenis_kelamin' => 'Perempuan',
            ],
            [
                'username' => 'william_clark',
                'nama_lengkap' => 'William Clark',
                'alamat' => 'Jl. Veteran No. 12',
                'umur' => '45',
                'jenis_kelamin' => 'Laki-laki',
            ],
            [
                'username' => 'olivia_harris',
                'nama_lengkap' => 'Olivia Harris',
                'alamat' => 'Jl. Asia Afrika No. 33',
                'umur' => '33',
                'jenis_kelamin' => 'Perempuan',
            ],
            [
                'username' => 'jacob_lewis',
                'nama_lengkap' => 'Jacob Lewis',
                'alamat' => 'Jl. Pahlawan No. 9',
                'umur' => '39',
                'jenis_kelamin' => 'Laki-laki',
            ],
            [
                'username' => 'ava_robinson',
                'nama_lengkap' => 'Ava Robinson',
                'alamat' => 'Jl. Hayam Wuruk No. 15',
                'umur' => '27',
                'jenis_kelamin' => 'Perempuan',
            ],
        ];
        DB::table('pelanggans')->insert($pelanggans);
    }
}
