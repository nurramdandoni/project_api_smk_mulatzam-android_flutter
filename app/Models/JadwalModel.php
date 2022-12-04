<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class JadwalModel extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $allowedFields = ['id_tahun_ajaran','id_hari','id_kurikulum','id_kelas','id_guru','jam_mulai','jam_akhir', 'tgl_uts','jam_mulai_uts','jam_akhir_uts','id_soal_uts', 'tgl_uas','jam_mulai_uas','jam_akhir_uas','id_soal_uas'];
}