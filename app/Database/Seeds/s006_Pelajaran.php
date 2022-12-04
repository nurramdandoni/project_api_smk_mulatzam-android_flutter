<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class s006_Pelajaran extends Seeder
{
    public function run()
    {
        //
        $pelajaran = [
			[
				'id_pelajaran' => '1',
				'nama_pelajaran' => 'Agama Islam',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '2',
				'nama_pelajaran' => 'Bahasa Indonesia',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '3',
				'nama_pelajaran' => 'Matematika',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '4',
				'nama_pelajaran' => 'Sejarah Indonesia',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '5',
				'nama_pelajaran' => 'Bahasa Inggris',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '6',
				'nama_pelajaran' => 'Seni Budaya',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '7',
				'nama_pelajaran' => 'Penjasorkes',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '8',
				'nama_pelajaran' => 'Kimia',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '9',
				'nama_pelajaran' => 'Fisika',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '10',
				'nama_pelajaran' => 'Bimbingan Karir (BK)',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '11',
				'nama_pelajaran' => 'Kewirausahaan',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '12',
				'nama_pelajaran' => 'Bahasa Sunda',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '13',
				'nama_pelajaran' => 'Pendidikan Pancasila dan Kewarganegaraan (PPKN)',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '14',
				'nama_pelajaran' => 'Teknologi Informasi dan Komunikasi (TIK)',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '15',
				'nama_pelajaran' => 'Produktif TKJ',
                'keterangan' => ''
            ],
			[
				'id_pelajaran' => '16',
				'nama_pelajaran' => 'Produktif RPL',
                'keterangan' => ''
            ],
		];
        foreach($pelajaran as $data){
			// insert semua data ke tabel
			$this->db->table('pelajaran')->insert($data);
		}
    }
}
