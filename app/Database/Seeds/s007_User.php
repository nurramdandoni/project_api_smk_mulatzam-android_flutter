<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class s007_User extends Seeder
{
    public function run()
    {
        //
        $user = [
			[
				'id_user' => '1',
				'username' => 'admin1',
				'password' => 'admin',
				'role' => 'admin',
                'keterangan' => ''
            ],
            [
				'id_user' => '2',
				'username' => '2022-0120',
				'password' => 'guru',
				'role' => 'guru',
                'keterangan' => ''
            ],
			[
				'id_user' => '3',
				'username' => '2022-0121',
				'password' => 'guru',
				'role' => 'guru',
                'keterangan' => ''
            ],
			[
				'id_user' => '4',
				'username' => '2022-0122',
				'password' => 'guru',
				'role' => 'guru',
                'keterangan' => ''
            ],
			[
				'id_user' => '5',
				'username' => '2022-0123',
				'password' => 'guru',
				'role' => 'guru',
                'keterangan' => ''
            ],
			[
				'id_user' => '6',
				'username' => '2022-2323001',
				'password' => 'siswa',
				'role' => 'siswa',
                'keterangan' => ''
            ],
			[
				'id_user' => '7',
				'username' => '2022-2323002',
				'password' => 'siswa',
				'role' => 'siswa',
                'keterangan' => ''
            ],
			[
				'id_user' => '8',
				'username' => '2022-2323003',
				'password' => 'siswa',
				'role' => 'siswa',
                'keterangan' => ''
            ],
			[
				'id_user' => '9',
				'username' => '2022-2323004',
				'password' => 'siswa',
				'role' => 'siswa',
                'keterangan' => ''
            ],
		];
        foreach($user as $data){
			// insert semua data ke tabel
			$this->db->table('user')->insert($data);
		}
    }
}
