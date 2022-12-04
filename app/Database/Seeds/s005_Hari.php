<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class s005_Hari extends Seeder
{
    public function run()
    {
        //
        $hari = [
			[
				'id_hari' => '1',
				'nama_hari' => 'Senin',
                'keterangan' => 'Hari Aktif Sekolah'
            ],
			[
				'id_hari' => '2',
				'nama_hari' => 'Selasa',
                'keterangan' => 'Hari Aktif Sekolah'
            ],
			[
				'id_hari' => '3',
				'nama_hari' => 'Rabu',
                'keterangan' => 'Hari Aktif Sekolah'
            ],
			[
				'id_hari' => '4',
				'nama_hari' => 'Kamis',
                'keterangan' => 'Hari Aktif Sekolah'
            ],
			[
				'id_hari' => '5',
				'nama_hari' => 'Jumat',
                'keterangan' => 'Hari Aktif Sekolah'
            ],
			[
				'id_hari' => '6',
				'nama_hari' => 'Sabtu',
                'keterangan' => 'Hari Aktif Sekolah'
            ],
		];
        foreach($hari as $data){
			// insert semua data ke tabel
			$this->db->table('hari')->insert($data);
		}
    }
}
