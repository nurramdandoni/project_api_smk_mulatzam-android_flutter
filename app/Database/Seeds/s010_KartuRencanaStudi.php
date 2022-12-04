<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class s010_KartuRencanaStudi extends Seeder
{
    public function run()
    {
        //
        $krs = [
			[
				'id_kartu_rencana_studi' => 1,
				'id_tahun_ajaran' => 2,
                'id_siswa' => 1,
                'semester' => 5,
                'keterangan' => 'Siswa Jurusan TKJ'
            ],
			[
				'id_kartu_rencana_studi' => 2,
				'id_tahun_ajaran' => 2,
                'id_siswa' => 2,
                'semester' => 5,
                'keterangan' => 'Siswa Jurusan TKJ'
            ],
			[
				'id_kartu_rencana_studi' => 3,
				'id_tahun_ajaran' => 2,
                'id_siswa' => 3,
                'semester' => 5,
                'keterangan' => 'Siswa Jurusan RPL'
            ],
			[
				'id_kartu_rencana_studi' => 4,
				'id_tahun_ajaran' => 2,
                'id_siswa' => 4,
                'semester' => 5,
                'keterangan' => 'Siswa Jurusan RPL'
            ],
		];
        foreach($krs as $data){
			// insert semua data ke tabel
			$this->db->table('kartu_rencana_studi')->insert($data);
		}
    }
}
