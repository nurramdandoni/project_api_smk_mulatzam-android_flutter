<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\TahunAjaranModel;
 
class TahunAjaran extends ResourceController
{
    use ResponseTrait;
    // all tahun
    public function index()
    {
        $model = new TahunAjaranModel();
        $data['tahun_ajaran'] = $model->orderBy('id_tahun_ajaran', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new TahunAjaranModel();
        $data = [
            'tahun_ajaran'  => $this->request->getVar('tahun_ajaran'),
            'semester'  => $this->request->getVar('semester'),
            'status'  => $this->request->getVar('status'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Tahun Ajaran berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single user
    public function show($id = null)
    {
        $model = new TahunAjaranModel();
        $data = $model->where('id_tahun_ajaran', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new TahunAjaranModel();
        $id = $this->request->getVar('id_tahun_ajaran');
        $data = [
            'tahun_ajaran'  => $this->request->getVar('tahun_ajaran'),
            'semester'  => $this->request->getVar('semester'),
            'status'  => $this->request->getVar('status'),
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Tahun Ajaran berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($id = null)
    {
        $model = new TahunAjaranModel();
        $data = $model->where('id_tahun_ajaran', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Tahun Ajaran berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}