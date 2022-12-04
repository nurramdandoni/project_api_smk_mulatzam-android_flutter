<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KartuRencanaStudiDetail extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_kartu_rencana_studi_detail'           => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_kartu_rencana_studi'      => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'id_kurikulum'       	 => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'id_kelas'       	 => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'keterangan'      	 => [
				'type'           => 'TEXT'
			]
        ]);
        // Membuat primary key
		$this->forge->addPrimaryKey('id_kartu_rencana_studi_detail', TRUE);
		$this->forge->addForeignKey('id_kartu_rencana_studi', 'kartu_rencana_studi', 'id_kartu_rencana_studi');
		$this->forge->addForeignKey('id_kurikulum', 'kurikulum', 'id_kurikulum');
		$this->forge->addForeignKey('id_kelas', 'kelas', 'id_kelas');

		// Membuat tabel news
		$this->forge->createTable('kartu_rencana_studi_detail', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('kartu_rencana_studi_detail');
    }
}
