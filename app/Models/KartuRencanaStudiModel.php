<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class KartuRencanaStudiModel extends Model
{
    protected $table = 'kartu_rencana_studi';
    protected $primaryKey = 'id_kartu_rencana_studi';
    protected $allowedFields = ['id_tahun_ajaran','id_siswa', 'keterangan'];
    




    
}