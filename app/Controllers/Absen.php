<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\AbsenModel;
 
class Absen extends ResourceController
{
    use ResponseTrait;
    // all absen
    public function index()
    {
        $model = new AbsenModel();
        $data['absen'] = $model->orderBy('id_absen', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new AbsenModel();
        $data = [
            'id_jadwal'  => $this->request->getVar('id_jadwal'),
            'id_siswa'  => $this->request->getVar('id_siswa'),
            'absen'  => $this->request->getVar('absen'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data absen berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single absen
    public function show($id = null)
    {
        $model = new AbsenModel();
        $data = $model->where('id_absen', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new AbsenModel();
        $id = $this->request->getVar('id_absen');
        $data = [
            'id_jadwal'  => $this->request->getVar('id_jadwal'),
            'id_siswa'  => $this->request->getVar('id_siswa'),
            'absen'  => $this->request->getVar('absen'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data absen berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($id = null)
    {
        $model = new AbsenModel();
        $data = $model->where('id_absen', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data absen berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}