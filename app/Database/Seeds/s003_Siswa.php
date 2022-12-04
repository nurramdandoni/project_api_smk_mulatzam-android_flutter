<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class s003_Siswa extends Seeder
{
    public function run()
    {
        //
        $siswa = [
			[
				'id_siswa' => '1',
				'nis' => '2022-2323001',
                'nama_siswa' => 'Yunita Fitriani',
                'jenis_kelamin' => 'Perempuan',
                'keterangan' => 'Jurusan TKJ'
            ],
			[
				'id_siswa' => '2',
				'nis' => '2022-2323002',
                'nama_siswa' => 'Andika Pratama',
                'jenis_kelamin' => 'Laki-laki',
                'keterangan' => 'Jurusan TKJ'
            ],
			[
				'id_siswa' => '3',
				'nis' => '2022-2323003',
                'nama_siswa' => 'Antonio Siahaan',
                'jenis_kelamin' => 'Laki-laki',
                'keterangan' => 'Jurusan RPL'
            ],
			[
				'id_siswa' => '4',
				'nis' => '2022-2323004',
                'nama_siswa' => 'Nagita Silanina',
                'jenis_kelamin' => 'Perempuan',
                'keterangan' => 'Jurusan RPL'
            ],
		];
        foreach($siswa as $data){
			// insert semua data ke tabel
			$this->db->table('siswa')->insert($data);
		}
    }
}
