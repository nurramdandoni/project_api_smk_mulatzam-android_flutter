<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class PelajaranModel extends Model
{
    protected $table = 'pelajaran';
    protected $primaryKey = 'id_pelajaran';
    protected $allowedFields = ['nama_pelajaran','keterangan'];
}