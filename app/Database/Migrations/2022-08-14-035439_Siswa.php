<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_siswa'           => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nis'       		 => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'nama_siswa'      	 => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'jenis_kelamin' 	 => [
				'type'           => 'ENUM',
                'constraint'     => ['Laki-laki','Perempuan']
			],
			'keterangan'      	 => [
				'type'           => 'TEXT'
			]
        ]);
        // Membuat primary key
		$this->forge->addPrimaryKey('id_siswa', TRUE);

		// Membuat tabel news
		$this->forge->createTable('siswa', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('siswa');
    }
}
