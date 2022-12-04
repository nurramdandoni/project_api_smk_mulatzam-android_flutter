<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class KurikulumModel extends Model
{
    protected $table = 'kurikulum';
    protected $primaryKey = 'id_kurikulum';
    protected $allowedFields = ['id_tahun_ajaran', 'id_jurusan', 'semester', 'id_pelajaran','kategori_mapel', 'id_koordinator_mapel', 'keterangan'];
}