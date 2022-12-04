<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['oid', 'role','username','password'];

    protected $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = \Config\Database::connect();
        // OR $this->db = db_connect();
    }

    function login($username, $password){
        $query = $this->db->query("select a.*,b.id_siswa,b.nama_siswa from " . $this->table . " a JOIN siswa b ON a.username=b.nis WHERE a.username = '$username' AND a.password = '$password'");
        return $query->getResult();
    }
}