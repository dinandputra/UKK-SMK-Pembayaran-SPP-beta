<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            [
                'id_kelas' => '101',
                'nama_kelas' => 'X-A',
                'jurusan' => 'RPL'
            ],
            [
                'id_kelas' => '102',
                'nama_kelas' => 'X-B',
                'jurusan' => 'TKJ'
            ],
            [
                'id_kelas' => '111',
                'nama_kelas' => 'XI-A',
                'jurusan' => 'RPL'
            ],
            [
                'id_kelas' => '112',
                'nama_kelas' => 'XI-B',
                'jurusan' => 'TKJ'
            ],
            [
                'id_kelas' => '121',
                'nama_kelas' => 'XII-A',
                'jurusan' => 'RPL'
            ],
            [
                'id_kelas' => '122',
                'nama_kelas' => 'XII-B',
                'jurusan' => 'TKJ'
            ]

        ];

        foreach ($kelas as $key => $kls) {
            Kelas::create($kls);
        }
    }
}
