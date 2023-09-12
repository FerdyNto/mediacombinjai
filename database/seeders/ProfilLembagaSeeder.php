<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilLembagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profil__lembagas')->insert(
            [
                'gambar_lembaga' => 'tentang Media Com 1.png',
                'profil_lembaga' => 'Nama Lembaga : Media Com Binjai

                Nomor Induk Lembaga Khursus : 07201.4.1.0057
                
                Izin Dinas Pendidikan : 421.9-5244 Tanggal 12 Agustus 2015
                
                Izin Dinas Tenaga Kerja : SER.563-01-03/DSTK/III/2015
                
                Alamat : Jl. Danau Baratan 1 No. 67C Kota Binjai
                
                Telp : 061-8820365
                
                Whatsapp : +62 813 6172 1169',
                'sejarah_lembaga' => 'Lembaga Pendidikan Pelatihan dan Keterampilan Komputer Media Com Binjai didirikan pada tanggal 25 Mei 2010 di kota Binjai, Sumatera Utara.

                Landasan pendirian lembaga ini adalah untuk mempersiapkan dan meningkatkan keahlian sumber daya manusia (SDM) sesuai dengan kebutuhan dunia kerja melalui pelatihan keterampilan, ilmu pengetahuan terapan serta pengembangan sikap dan perilaku kerja profesional
                
                Media Com Binjai menyelenggarakan beberapa jenis pelatihan meliputi : Teknisi Komputer (Hardware), Teknisi Komputer Jaringan (LAN), Web Desain (Pemrograman Web), Desain Grafis (Vektor dan Bitmap), Video shooting dan Editing (Multimedia), Komputer Akuntansi (MYOB), Aplikasi Perkantoran (MS Office) dan Paket Kerja Industri (Prakerin) bagi murid SMK yang ingin melaksanakan Prakerin di Media Com Binjai.',
                'foto_pimpinan' => 'Pimpinan Mediacom.png'
            ]
        );
    }
}
