<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'id_petugas' => 9001,
                'username' => 'user01',
                'password' => bcrypt('rahasia'),
                'nama_petugas' => 'user 1',
                'level' => 0
            ],
            [
                'id_petugas' => 9101,
                'username' => 'petugas01',
                'password' => bcrypt('rahasia'),
                'nama_petugas' => 'petugas 1',
                'level' => 1
            ],
            [
                'id_petugas' => 9201,
                'username' => 'admin01',
                'password' => bcrypt('rahasia'),
                'nama_petugas' => 'admin 1',
                'level' => 2
            ],
        ];

        foreach ($user as $key => $user) {
            User::create($user);
        }
    }
}
