<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ImportSeed extends Seeder
{
    public function run()
    {
        $this->call('s001_TahunAjaran');
        $this->call('s002_Guru');
        $this->call('s003_Siswa');
        $this->call('s004_Jurusan');
        $this->call('s005_Hari');
        $this->call('s006_Pelajaran');
        $this->call('s007_User');
        $this->call('s008_Kelas');
        $this->call('s009_Kurikulum');
        $this->call('s010_KartuRencanaStudi');
        $this->call('s011_KartuRencanaStudiDetail');
        $this->call('s012_Jadwal');
        $this->call('s013_Absen');
        $this->call('s014_Nilai');
    }
}