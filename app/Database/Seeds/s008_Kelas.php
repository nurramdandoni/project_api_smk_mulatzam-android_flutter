<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class s008_Kelas extends Seeder
{
    public function run()
    {
        //
        $kelas = [
			[
				'id_kelas' => 1,
				'id_wali_kelas' => 1,
                'id_jurusan' => 1,
                'nama_kelas' => 'X TKJ 1',
                'kapasitas' => 30,
                'status' => 'aktif',
                'keterangan' => 'Kelas Jurusan Pertama'
            ],
			[
				'id_kelas' => 2,
				'id_wali_kelas' => 2,
                'id_jurusan' => 2,
                'nama_kelas' => 'X RPL 1',
                'kapasitas' => 28,
                'status' => 'aktif',
                'keterangan' => 'Kelas Jurusan Kedua'
            ],
		];
        foreach($kelas as $data){
			// insert semua data ke tabel
			$this->db->table('kelas')->insert($data);
		}
    }
}
