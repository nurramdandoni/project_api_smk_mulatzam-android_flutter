<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class JurusanModel extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'id_jurusan';
    protected $allowedFields = ['id_tahun_ajaran', 'nama_jurusan', 'akreditasi', 'no_sk', 'keterangan'];
}