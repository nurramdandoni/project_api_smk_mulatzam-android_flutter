<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\GuruModel;
 
class Guru extends ResourceController
{
    use ResponseTrait;
    // all guru
    public function index()
    {
        $model = new GuruModel();
        $data['guru'] = $model->orderBy('id_guru', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new GuruModel();
        $data = [
            'nip'  => $this->request->getVar('nip'),
            'nama_guru'  => $this->request->getVar('nama_guru'),
            'jenis_kelamin'  => $this->request->getVar('jenis_kelamin'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data guru berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single guru
    public function show($id = null)
    {
        $model = new GuruModel();
        $data = $model->where('id_guru', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new GuruModel();
        $id = $this->request->getVar('id_guru');
        $data = [
            'nip'  => $this->request->getVar('nip'),
            'nama_guru'  => $this->request->getVar('nama_guru'),
            'jenis_kelamin'  => $this->request->getVar('jenis_kelamin'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data guru berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($id = null)
    {
        $model = new GuruModel();
        $data = $model->where('id_guru', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data guru berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}