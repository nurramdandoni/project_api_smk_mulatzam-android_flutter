<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class AbsenModel extends Model
{
    protected $table = 'absen';
    protected $primaryKey = 'id_absen';
    protected $allowedFields = ['id_jadwal', 'absen','keterangan'];
}