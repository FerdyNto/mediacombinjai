<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visi_misis')->insert([
            'visi' => 'Menjadi Pusat Pendidikan Dan Pelatihan Yang Unggul Dalam Intelektual Dan Mahir Dalam Keterampilan',
            'misi' => 'Menyelenggarakan Pendidikan, Pelatihan dan Keterampilan di Bidang Informasi dan Komputer untuk menghasilkan SDM yang profesional di bidang Teknologi Informasi dan Komunikasi serta taat kepada Allah Tuhan Yang Esa.'
        ]);
    }
}
