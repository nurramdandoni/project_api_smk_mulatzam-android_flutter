<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\SiswaModel;
 
class Siswa extends ResourceController
{
    use ResponseTrait;
    // all siswa
    public function index()
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->orderBy('id_siswa', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new SiswaModel();
        $data = [
            'nis' => $this->request->getVar('nis'),
            'nama_siswa'  => $this->request->getVar('nama_siswa'),
            'jenis_kelamin'  => $this->request->getVar('jenis_kelamin'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Siswa berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single siswa
    public function show($id = null)
    {
        $model = new SiswaModel();
        $data = $model->where('id_siswa', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new SiswaModel();
        // $id = $this->request->getVar('id_siswa');
        $data = [
            'nis' => $this->request->getVar('nis'),
            'nama_siswa'  => $this->request->getVar('nama_siswa'),
            'jenis_kelamin'  => $this->request->getVar('jenis_kelamin'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Siswa berhasil diubah.'
            ]
        ];
        return $this->respond($response);
        // echo json_encode($data);
    }
    // delete
    public function delete($id = null)
    {
        $model = new SiswaModel();
        $data = $model->where('id_siswa', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Siswa berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}