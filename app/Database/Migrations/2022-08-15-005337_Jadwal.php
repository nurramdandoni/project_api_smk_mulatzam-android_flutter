<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_jadwal'           => [
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
			'id_hari'      => [
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
			'id_guru'       	 => [
				'type'           => 'INT',
				'constraint'     => 11,
                'unsigned'       => true,
			],
			'jam_mulai'      	 => [
				'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
			'jam_akhir'      	 => [
				'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
			'tgl_uts'      	 => [
				'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
			'jam_mulai_uts'      	 => [
				'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
			'jam_akhir_uts'      	 => [
				'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
			'id_soal_uts'      	 => [
				'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
			'tgl_uas'      	 => [
				'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
			'jam_mulai_uas'      	 => [
				'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
			'jam_akhir_uas'      	 => [
				'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
			'id_soal_uas'      	 => [
				'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
			'keterangan'      	 => [
				'type'           => 'TEXT'
			]
        ]);
        // Membuat primary key
		$this->forge->addPrimaryKey('id_jadwal', TRUE);
        $this->forge->addForeignKey('id_tahun_ajaran', 'tahun_ajaran', 'id_tahun_ajaran');
        $this->forge->addForeignKey('id_hari', 'hari', 'id_hari');
        $this->forge->addForeignKey('id_kurikulum', 'kurikulum', 'id_kurikulum');
        $this->forge->addForeignKey('id_kelas', 'kelas', 'id_kelas');
        $this->forge->addForeignKey('id_guru', 'guru', 'id_guru');

		// Membuat tabel news
		$this->forge->createTable('jadwal', TRUE);
    }

    public function down()
    {
        //
        $this->forge->dropTable('jadwal');
    }
}
