<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Spp;

class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spp = [
            [
                'id_spp' => 2320,
                'tahun' => 2023,
                'nominal' => '2.400.000' 
            ],
            [
                'id_spp' => 2325,
                'tahun' => 2023,
                'nominal' => '3.000.000' 
            ],
            [
                'id_spp' => 2330,
                'tahun' => 2023,
                'nominal' => '3.600.000' 
            ],
            [
                'id_spp' => 2335,
                'tahun' => 2023,
                'nominal' => '4.200.000' 
            ],
            [
                'id_spp' => 2340,
                'tahun' => 2023,
                'nominal' => '4.800.000' 
            ],
        ];

        foreach ($spp as $key => $spp) {
            Spp::create($spp); 
        }
    }
}
