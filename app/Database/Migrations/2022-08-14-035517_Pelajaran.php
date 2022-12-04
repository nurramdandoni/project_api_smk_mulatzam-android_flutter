<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelajaran extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_pelajaran'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_pelajaran'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'keterangan'       	 => [
				'type'           => 'TEXT'
			]
        ]);
        // Membuat primary key
		$this->forge->addPrimaryKey('id_pelajaran', TRUE);

		// Membuat tabel news
		$this->forge->createTable('pelajaran', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('pelajaran');
    }
}
