<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert(
                [
                    'username' => 'Admin' . $i,
                    'password' => bcrypt('Testing'),
                    'nama' => 'Admin Kece' . $i,
                    'jabatan' => 'Instruktur Pemrograman',
                    'status' => 'aktif',
                    'foto' => 'user.jpg'
                ]
            );
        }
    }
}
