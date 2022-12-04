<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Hari extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_hari'          	 => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_hari'       	 => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'keterangan'      	 => [
				'type'           => 'TEXT'
			]
        ]);
        // Membuat primary key
		$this->forge->addPrimaryKey('id_hari', TRUE);

		// Membuat tabel news
		$this->forge->createTable('hari', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('hari');
    }
}
