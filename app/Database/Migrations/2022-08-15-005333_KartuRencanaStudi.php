<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KartuRencanaStudi extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_kartu_rencana_studi'           => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_tahun_ajaran'      => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'id_siswa'       	 => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'semester'       	 => [
				'type'           => 'INT',
				'constraint'     => 1
			],
			'keterangan'      	 => [
				'type'           => 'TEXT'
			]
        ]);
        // Membuat primary key
		$this->forge->addPrimaryKey('id_kartu_rencana_studi', TRUE);
		$this->forge->addForeignKey('id_tahun_ajaran', 'tahun_ajaran', 'id_tahun_ajaran');
		$this->forge->addForeignKey('id_siswa', 'siswa', 'id_siswa');

		// Membuat tabel news
		$this->forge->createTable('kartu_rencana_studi', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('kartu_rencana_studi');
    }
}
