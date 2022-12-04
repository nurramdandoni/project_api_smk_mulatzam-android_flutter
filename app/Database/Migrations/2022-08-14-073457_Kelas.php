<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelas extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_kelas'           => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'id_wali_kelas'      => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'id_jurusan'       	 => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'nama_kelas'      	 => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'kapasitas' => [
				'type'           => 'INT',
                'constraint'     => 3
			],
			'status'      	 	 => [
				'type'           => 'ENUM',
				'constraint'	 => ['aktif', 'non aktif']
			],
			'keterangan'      	 => [
				'type'           => 'TEXT'
			]
        ]);
         // Membuat primary key
		$this->forge->addPrimaryKey('id_kelas', TRUE);
		$this->forge->addForeignKey('id_wali_kelas', 'guru', 'id_guru');
		$this->forge->addForeignKey('id_jurusan', 'jurusan', 'id_jurusan');

		// Membuat tabel news
		$this->forge->createTable('kelas', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('kelas');
    }
}
