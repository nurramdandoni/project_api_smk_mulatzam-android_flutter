<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\KartuRencanaStudiDetailModel;
 
class KartuRencanaStudiDetail extends ResourceController
{
    use ResponseTrait;
    // all data kelas
    public function index()
    {
        $model = new KartuRencanaStudiDetailModel();
        $data['kartu_rencana_studi_detail'] = $model->orderBy('id_kartu_rencana_studi_detail', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new KartuRencanaStudiDetailModel();
        $data = [
            'id_kartu_rencana_studi'  => $this->request->getVar('id_kartu_rencana_studi'),
            // kalo dikampus id pelajaran = id kurikulum dan perlu ada tabel kurikulum tambahan
            'id_kurikulum'  => $this->request->getVar('id_kurikulum'),
            'id_kelas'  => $this->request->getVar('id_kelas'),
            'keterangan'  => $this->request->getVar('keterangan'),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Kartu Rencana Studi Detail berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single kelas
    public function show($id = null)
    {
        $model = new KartuRencanaStudiDetailModel();
        $data = $model->where('id_kartu_rencana_studi_detail', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new KartuRencanaStudiDetailModel();
        $id = $this->request->getVar('id_kartu_rencana_studi_detail');
        $data = [
            'id_kartu_rencana_studi'  => $this->request->getVar('id_kartu_rencana_studi'),
            // kalo dikampus id pelajaran = id kurikulum dan perlu ada tabel kurikulum tambahan
            'id_kurikulum'  => $this->request->getVar('id_kurikulum'),
            'id_kelas'  => $this->request->getVar('id_kelas'),
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
        $model = new KartuRencanaStudiDetailModel();
        $data = $model->where('id_kartu_rencana_studi_detail', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Kartu Rencana Studi Detail berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}