<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Absen extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_absen'           => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_jadwal'       	 => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'id_siswa'      	 => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'absen' => [
				'type'           => 'VARCHAR',
                'constraint'     => 2
			],
			'keterangan'      	 => [
				'type'           => 'TEXT'
			]
        ]);
        // Membuat primary key
		$this->forge->addPrimaryKey('id_absen', TRUE);
		$this->forge->addForeignKey('id_jadwal', 'jadwal', 'id_jadwal');
		$this->forge->addForeignKey('id_siswa', 'siswa', 'id_siswa');

		// Membuat tabel news
		$this->forge->createTable('absen', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('absen');
    }
}
