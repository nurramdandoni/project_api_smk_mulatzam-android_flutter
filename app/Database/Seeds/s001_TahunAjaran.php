<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class s001_TahunAjaran extends Seeder
{
    public function run()
    {
        //
        $tahun = [
			[
				'id_tahun_ajaran' => '1',
				'tahun_ajaran' => '2021/2022',
                'semester' => 'Ganjil',
                'status' => 'non aktif'
            ],
			[
				'id_tahun_ajaran' => '2',
				'tahun_ajaran' => '2021/2022',
                'semester' => 'Genap',
                'status' => 'aktif'
            ],
		];
        foreach($tahun as $data){
			// insert semua data ke tabel
			$this->db->table('tahun_ajaran')->insert($data);
		}
    }
}
