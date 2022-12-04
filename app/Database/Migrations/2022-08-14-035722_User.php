<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_user'           => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'       	 => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'password'      	 => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'role' => [
				'type'           => 'ENUM',
                'constraint'     => ['admin','guru','siswa']
			],
			'keterangan'      	 => [
				'type'           => 'TEXT'
			]
        ]);
        // Membuat primary key
		$this->forge->addPrimaryKey('id_user', TRUE);

		// Membuat tabel news
		$this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('user');
    }
}
