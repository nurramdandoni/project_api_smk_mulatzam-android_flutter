<?php

namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel; // untuk ambil data yang berhuungan dengan siswa
use App\Models\SiswaModel; // untuk ambil data yang berhuungan dengan siswa

class Logic extends ResourceController
{
    public function login(){
        $model = new UserModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data_db = $model->login($username, $password);
        if(count($data_db) > 0){

            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Login Berhasil'
                ],
                'data'      => $data_db[0]
            ];
            return $this->respond($response);
        }else{
            $response = [
                'status'   => 401,
                'error'    => null,
                'messages' => [
                    'success' => 'Login Gagal'
                ],
                'data'      => null
            ];

            return $this->respond($response, 401);
        }
    }

    // aplikasi siswa 5 pages

    // menampilkan data pelajaran hari ini
    public function getHomeSiswa()
    {
        //
    }

    // menampilkan list absen kelas all day
    public function getAbsenSiswa()
    {
        //
    }

    // menampilkan list absen kelas spesifik all pertemuan
    public function getAbsenSiswa_list()
    {
        //
    }

    // menampilkan list nilai kelas all day
    public function getNilaiSiswa()
    {
        //
    }

    // menampilkan list nilai kelas spesifik all pertemuan
    public function getNilaiSiswa_list()
    {
        //
    }

    // menampilkan data biodata siswa
    public function getBiodataSiswa()
    {
        //
    }

    // update data biodata siswa
    public function updateBiodataSiswa()
    {
        //
    }

    // aplikasi guru 7 pages

    // menampilkan data mengajar hari ini
    public function getHomeGuru(){
        // 
    }

    // menampilkan data absen kelas all day
    public function getAbsenGuru(){
        // 
    }

    // input data absen kelas hari ini
    public function insertAbsenGuru(){
        // 
    }

    // menampilkan data nilai kelas all day
    public function getNilaiGuru(){
        // 
    }

    // input data nilai hari ini
    public function insertNilaiGuru(){
        // 
    }

    // menampilkan data biodata guru
    public function getBiodataGuru(){
        // 
    }

    // update biodata guru
    public function updateBiodataGuru(){
        // 
    }
}
