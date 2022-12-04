<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\KartuRencanaStudiModel;
 
class KartuRencanaStudi extends ResourceController
{
    use ResponseTrait;
    // all data kelas
    public function index()
    {
        $model = new KartuRencanaStudiModel();
        $data['kartu_rencana_studi'] = $model->orderBy('id_kartu_rencana_studi', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new KartuRencanaStudiModel();
        $data = [
            'id_tahun_ajaran'  => $this->request->getVar('id_tahun_ajaran'),
            'id_siswa'  => $this->request->getVar('id_siswa'),
            'semester'  => $this->request->getVar('semester'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Kartu Rencana Studi berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single kelas
    public function show($id = null)
    {
        $model = new KartuRencanaStudiModel();
        $data = $model->where('id_kartu_rencana_studi', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new KartuRencanaStudiModel();
        $id = $this->request->getVar('id_kartu_rencana_studi');
        $data = [
            'id_tahun_ajaran'  => $this->request->getVar('id_tahun_ajaran'),
            'id_siswa'  => $this->request->getVar('id_siswa'),
            'semester'  => $this->request->getVar('semester'),
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
        $model = new KartuRencanaStudiModel();
        $data = $model->where('id_kartu_rencana_studi', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Kartu Rencana Studi berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}