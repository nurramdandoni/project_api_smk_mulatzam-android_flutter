<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\HariModel;
 
class Hari extends ResourceController
{
    use ResponseTrait;
    // all users
    public function index()
    {
        $model = new HariModel();
        $data['hari'] = $model->orderBy('id_hari', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new HariModel();
        $data = [
            'nama_hari' => $this->request->getVar('nama_hari'),
            'keterangan'  => $this->request->getVar('keteragan'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data hari berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single user
    public function show($id = null)
    {
        $model = new HariModel();
        $data = $model->where('id_hari', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new HariModel();
        $id = $this->request->getVar('id_hari');
        $data = [
            'nama_hari' => $this->request->getVar('nama_hari'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data hari berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($id = null)
    {
        $model = new HariModel();
        $data = $model->where('id_hari', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data hari berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}