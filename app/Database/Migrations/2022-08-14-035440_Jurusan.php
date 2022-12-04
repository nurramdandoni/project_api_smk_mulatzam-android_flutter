<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jurusan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_jurusan'           => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_tahun_ajaran'    => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'nama_jurusan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'akreditasi' 	     => [
				'type'           => 'VARCHAR',
                'constraint'     => '255'
			],
			'no_sk' 	         => [
				'type'           => 'VARCHAR',
                'constraint'     => '255'
			],
			'keterangan'      	 => [
				'type'           => 'TEXT'
			]
        ]);
        // Membuat primary key
		$this->forge->addPrimaryKey('id_jurusan', TRUE);
		$this->forge->addForeignKey('id_tahun_ajaran', 'tahun_ajaran', 'id_tahun_ajaran');

		// Membuat tabel news
		$this->forge->createTable('jurusan', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('jurusan');
    }
}
