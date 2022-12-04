<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class KartuRencanaStudiDetailModel extends Model
{
    protected $table = 'kartu_rencana_studi_detail';
    protected $primaryKey = 'id_kartu_rencana_studi_detail';
    protected $allowedFields = ['id_kartu_rencana_studi', 'id_kurikulum', 'id_kelas', 'keterangan'];
    




    
}