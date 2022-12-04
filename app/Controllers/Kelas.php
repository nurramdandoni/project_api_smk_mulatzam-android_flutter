<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\KelasModel;
 
class Kelas extends ResourceController
{
    use ResponseTrait;
    // all kelas
    public function index()
    {
        $model = new KelasModel();
        $data['kelas'] = $model->orderBy('id_kelas', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new KelasModel();
        $data = [
            'id_wali_kelas'  => $this->request->getVar('id_wali_kelas'),
            'id_jurusan'  => $this->request->getVar('id_jurusan'),
            'nama_kelas'  => $this->request->getVar('nama_kelas'),
            'kapasitas'  => $this->request->getVar('kapasitas'),
            'status'  => $this->request->getVar('status'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data kelas berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single kelas
    public function show($id = null)
    {
        $model = new KelasModel();
        $data = $model->where('id_kelas', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new KelasModel();
        $id = $this->request->getVar('id_kelas');
        $data = [
            'id_wali_kelas'  => $this->request->getVar('id_wali_kelas'),
            'id_jurusan'  => $this->request->getVar('id_jurusan'),
            'nama_kelas'  => $this->request->getVar('nama_kelas'),
            'kapasitas'  => $this->request->getVar('kapasitas'),
            'status'  => $this->request->getVar('status'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        // $model->update($id, $data);
        // $response = [
        //     'status'   => 200,
        //     'error'    => null,
        //     'messages' => [
        //         'success' => 'Data Siswa berhasil diubah.'
        //     ]
        // ];
        // return $this->respond($response);
        echo json_encode($_REQUEST);
    }
    // delete
    public function delete($id = null)
    {
        $model = new KelasModel();
        $data = $model->where('id_kelas', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Kelas berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}