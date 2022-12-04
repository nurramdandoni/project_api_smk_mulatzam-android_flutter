<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Guru extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_guru'          	 => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nip'       		 => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'nama_guru'      	 => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'jenis_kelamin' => [
				'type'           => 'ENUM',
                'constraint'     => ['Laki-laki','Perempuan']
			],
			'keterangan'      	 => [
				'type'           => 'TEXT'
			]
        ]);
        // Membuat primary key
		$this->forge->addPrimaryKey('id_guru', TRUE);

		// Membuat tabel news
		$this->forge->createTable('guru', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('guru');
    }
}
