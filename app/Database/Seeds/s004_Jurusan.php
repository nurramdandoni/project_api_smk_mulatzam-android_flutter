<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class s004_Jurusan extends Seeder
{
    public function run()
    {
        //
        $jurusan = [
			[
				'id_jurusan' => '1',
				'id_tahun_ajaran' => '1',
				'nama_jurusan' => 'Teknik Komputer dan Jaringan',
				'akreditasi' => 'B',
				'no_sk' => 'BAN-PT/2022/0001',
                'keterangan' => ''
            ],
			[
				'id_jurusan' => '2',
				'id_tahun_ajaran' => '1',
				'nama_jurusan' => 'Rekayasa Perangkat Lunak',
				'akreditasi' => 'B',
				'no_sk' => 'BAN-PT/2022/0002',
                'keterangan' => ''
            ],
		];
        foreach($jurusan as $data){
			// insert semua data ke tabel
			$this->db->table('jurusan')->insert($data);
		}
    }
}
