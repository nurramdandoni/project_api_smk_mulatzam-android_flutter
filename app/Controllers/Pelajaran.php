<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\PelajaranModel;
 
class Pelajaran extends ResourceController
{
    use ResponseTrait;
    // all pelajaran
    public function index()
    {
        $model = new PelajaranModel();
        $data['pelajaran'] = $model->orderBy('id_pelajaran', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new PelajaranModel();
        $data = [
            'nama_pelajaran'  => $this->request->getVar('nama_pelajaran'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data pelajaran berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single pelajaran
    public function show($id = null)
    {
        $model = new PelajaranModel();
        $data = $model->where('id_pelajaran', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new PelajaranModel();
        $id = $this->request->getVar('id_pelajaran');
        $data = [
            'nama_pelajaran'  => $this->request->getVar('nama_pelajaran'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data pelajaran berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($id = null)
    {
        $model = new PelajaranModel();
        $data = $model->where('id_pelajaran', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data pelajaran berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}