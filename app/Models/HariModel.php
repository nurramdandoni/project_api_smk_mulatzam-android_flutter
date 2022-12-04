<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class HariModel extends Model
{
    protected $table = 'hari';
    protected $primaryKey = 'id_hari';
    protected $allowedFields = ['nama_hari','keterangan'];
}