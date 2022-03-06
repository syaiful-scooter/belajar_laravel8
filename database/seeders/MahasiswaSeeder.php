<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        // ========================
        Mahasiswa::factory(24)->create();
        // ========================

        //
        // DB::table('mahasiswa')->truncate();
        // $data_mhs = [
        //     [
        //         'nim' => '12345678',
        //         'nama' => 'Nopi',
        //         'tempat_lahir' => 'Bandung',
        //         'tanggal_lahir' => '1985-11-10',
        //         'fakultas' => 'Bahasa',
        //         'jurusan' => 'Sastra Inggris',
        //     ],
        //     [
        //         'nim' => '20987456',
        //         'nama' => 'Erric',
        //         'tempat_lahir' => 'Jepara',
        //         'tanggal_lahir' => '1985-05-11',
        //         'fakultas' => 'Bahasa',
        //         'jurusan' => 'Sastra jepang',
        //     ],
        //     [
        //         'nim' => '22987456',
        //         'nama' => 'Deny',
        //         'tempat_lahir' => 'Jakarta',
        //         'tanggal_lahir' => '1965-04-09',
        //         'fakultas' => 'Teknik',
        //         'jurusan' => 'Teknik Elektro',
        //     ],
        // ];

        // DB::table('mahasiswa')->insert($data_mhs);
    }
}
