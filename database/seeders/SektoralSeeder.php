<?php

namespace Database\Seeders;

use App\Models\Sektoral;
use Illuminate\Database\Seeder;

class SektoralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CREATE SEKTORAL
        Sektoral::create(
            [
                'kode_sektor' => 'idpw682361',
                'deskripsi' => '-',
                'nama_sektor' => 'Infrasruktur dan Pengembangan Wilayah',
                'pembuat' => 'ADM'.date('YmdHis')
            ],
        );

        Sektoral::create(
            [
                'kode_sektor' => 'pdpm235801',
                'deskripsi' => '-',
                'nama_sektor' => 'Pemerintahan dan Pembangunan Manusia',
                'pembuat' => 'ADM'.date('YmdHis')
            ]
        );

        Sektoral::create(
            [
                'kode_sektor' => 'pdk3920124',
                'deskripsi' => '-',
                'nama_sektor' => 'Pendidikan dan Kesehatan',
                'pembuat' => 'ADM'.date('YmdHis')
            ]
        );

        Sektoral::create(
            [
                'kode_sektor' => 'pdsda61230',
                'deskripsi' => '-',
                'nama_sektor' => 'Perekonomian dan Sumber Daya Alam',
                'pembuat' => 'ADM'.date('YmdHis')
            ]
        );
    }
}
