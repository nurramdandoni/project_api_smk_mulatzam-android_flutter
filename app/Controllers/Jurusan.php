<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\JurusanModel;
 
class Jurusan extends ResourceController
{
    use ResponseTrait;
    // all jurusan
    public function index()
    {
        $model = new JurusanModel();
        $data['jurusan'] = $model->orderBy('id_jurusan', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new JurusanModel();
        $data = [
            'id_tahun_ajaran'  => $this->request->getVar('id_tahun_ajaran'),
            'nama_jurusan'  => $this->request->getVar('nama_jurusan'),
            'akreditasi'  => $this->request->getVar('akreditasi'),
            'no_sk'  => $this->request->getVar('no_sk'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Jurusan berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single kelas
    public function show($id = null)
    {
        $model = new JurusanModel();
        $data = $model->where('id_jurusan', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new JurusanModel();
        $id = $this->request->getVar('id_jurusan');
        $data = [
            'id_tahun_ajaran'  => $this->request->getVar('id_tahun_ajaran'),
            'nama_jurusan'  => $this->request->getVar('nama_jurusan'),
            'nama_jurusan'  => $this->request->getVar('nama_jurusan'),
            'akreditasi'  => $this->request->getVar('akreditasi'),
            'akreditasi'  => $this->request->getVar('akreditasi'),
            'no_sk'  => $this->request->getVar('no_sk'),
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
        $model = new JurusanModel();
        $data = $model->where('id_jurusan', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Jurusan berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}