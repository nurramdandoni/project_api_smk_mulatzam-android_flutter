<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TahunAjaran extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_tahun_ajaran'           => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'tahun_ajaran'      	 => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'semester' => [
				'type'           => 'ENUM',
                'constraint'     => ['ganjil','genap']
			],
			'status'      	     => [
				'type'           => 'ENUM',
                'constraint'     => ['aktif','non aktif']
			]
        ]);
         // Membuat primary key
		$this->forge->addPrimaryKey('id_tahun_ajaran', TRUE);

		// Membuat tabel news
		$this->forge->createTable('tahun_ajaran', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('tahun_ajaran');
    }
}
