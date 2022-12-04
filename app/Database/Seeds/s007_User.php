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
				'email' => 'admin1@gmail.com',
				'password' => 'admin',
				'role' => 'admin',
                'keterangan' => ''
            ],
            [
				'id_user' => '2',
				'username' => '2022-0120',
				'email' => '20220120@gmail.com',
				'password' => 'guru',
				'role' => 'guru',
                'keterangan' => ''
            ],
			[
				'id_user' => '3',
				'username' => '2022-0121',
				'email' => '20220121@gmail.com',
				'password' => 'guru',
				'role' => 'guru',
                'keterangan' => ''
            ],
			[
				'id_user' => '4',
				'username' => '2022-0122',
				'email' => '20220122@gmail.com',
				'password' => 'guru',
				'role' => 'guru',
                'keterangan' => ''
            ],
			[
				'id_user' => '5',
				'username' => '2022-0123',
				'email' => '20220123@gmail.com',
				'password' => 'guru',
				'role' => 'guru',
                'keterangan' => ''
            ],
			[
				'id_user' => '6',
				'username' => '2022-2323001',
				'email' => '20222323001@gmail.com',
				'password' => 'siswa',
				'role' => 'siswa',
                'keterangan' => ''
            ],
			[
				'id_user' => '7',
				'username' => '2022-2323002',
				'email' => '20222323002@gmail.com',
				'password' => 'siswa',
				'role' => 'siswa',
                'keterangan' => ''
            ],
			[
				'id_user' => '8',
				'username' => '2022-2323003',
				'email' => '20222323003@gmail.com',
				'password' => 'siswa',
				'role' => 'siswa',
                'keterangan' => ''
            ],
			[
				'id_user' => '9',
				'username' => '2022-2323004',
				'email' => '20222323004@gmail.com',
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
