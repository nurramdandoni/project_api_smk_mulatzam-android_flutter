<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class KelasModel extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $allowedFields = ['id_wali_kelas','id_jurusan', 'nama_kelas','kapasitas', 'status','keterangan'];
    




    
}