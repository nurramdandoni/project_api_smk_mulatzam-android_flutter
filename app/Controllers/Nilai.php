<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\NilaiModel;
 
class Nilai extends ResourceController
{
    use ResponseTrait;
    // all nilai
    public function index()
    {
        $model = new NilaiModel();
        $data['nilai'] = $model->orderBy('id_nilai', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new NilaiModel();
        $data = [
            'id_jadwal'  => $this->request->getVar('id_jadwal'),
            'nilai'  => $this->request->getVar('nilai'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data nilai berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single nilai
    public function show($id = null)
    {
        $model = new NilaiModel();
        $data = $model->where('id_nilai', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new NilaiModel();
        $id = $this->request->getVar('id_nilai');
        $data = [
            'id_jadwal'  => $this->request->getVar('id_jadwal'),
            'nilai'  => $this->request->getVar('nilai'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data nilai berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($id = null)
    {
        $model = new NilaiModel();
        $data = $model->where('id_nilai', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data nilai berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}