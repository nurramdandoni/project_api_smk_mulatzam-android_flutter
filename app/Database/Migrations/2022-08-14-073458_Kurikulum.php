<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kurikulum extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_kurikulum'           => [
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
            'id_jurusan'      => [
                'type'           => 'INT',
                'constraint'     => 11,
				'unsigned'       => true,
            ],
			'semester'       	 => [
				'type'           => 'INT',
				'constraint'     => 1
			],
			'id_pelajaran'       	 => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'kategori_mapel'       	 => [
				'type'           => 'ENUM',
				'constraint'     => ['wajib', 'mulok', 'jurusan']
			],
			'id_koordinator_mapel'       	 => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'null'			 => true
			],
			'keterangan'      	 => [
				'type'           => 'TEXT'
			]
        ]);
        // Membuat primary key
		$this->forge->addPrimaryKey('id_kurikulum', TRUE);
		$this->forge->addForeignKey('id_tahun_ajaran', 'tahun_ajaran', 'id_tahun_ajaran');
		$this->forge->addForeignKey('id_jurusan', 'jurusan', 'id_jurusan');
		$this->forge->addForeignKey('id_pelajaran', 'pelajaran', 'id_pelajaran');
		$this->forge->addForeignKey('id_koordinator_mapel', 'guru', 'id_guru');
		

		// Membuat tabel news
		$this->forge->createTable('kurikulum', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('kurikulum');
    }
}
