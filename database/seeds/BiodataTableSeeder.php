<?php

use Illuminate\Database\Seeder;

class BiodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	$biodata=[
       		[
       			'nama'=>'Fitra Surya Saputra',
       			'alamat'=>'Cibalong Garut',
       			'pekerjaan'=>'Programmer'
       		],
       		[
       			'nama'=>'Fahmi Ali',
       			'alamat'=>'Cipongkor KBB',
       			'pekerjaan'=>'Ustadz'
       		],
       		[
       			'nama'=>'Husnul Roby Gunawan',
       			'alamat'=>'Cibalong Garut',
       			'pekerjaan'=>'Kepala Desa'
       		],
       	];
       	DB::table('biodata')->insert($biodata);

    }

}
