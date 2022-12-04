<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class s002_Guru extends Seeder
{
    public function run()
    {
        //

        $guru = [
			[
				'id_guru' => '1',
				'nip' => '2022-0120',
                'nama_guru' => 'Ifa Susanti, S. Kom.',
                'jenis_kelamin' => 'Perempuan',
                'keterangan' => 'Guru Produktif TKJ'
            ],
			[
				'id_guru' => '2',
				'nip' => '2022-0121',
                'nama_guru' => 'Dani Sutisna, S. Pd.',
                'jenis_kelamin' => 'Laki-laki',
                'keterangan' => 'Guru Mata Pelajaran Fisika'
            ],
			[
				'id_guru' => '3',
				'nip' => '2022-0122',
                'nama_guru' => 'Ahmad Rifai, S. Pd. I.',
                'jenis_kelamin' => 'Laki-laki',
                'keterangan' => 'Guru Mata Pelajaran Agama'
            ],
			[
				'id_guru' => '4',
				'nip' => '2022-0123',
                'nama_guru' => 'Aan Nurlisvianti, S. Pd. I.',
                'jenis_kelamin' => 'Perempuan',
                'keterangan' => 'Guru Mata Pelajaran Agama'
            ],
		];
        foreach($guru as $data){
			// insert semua data ke tabel
			$this->db->table('guru')->insert($data);
		}
    }
}
