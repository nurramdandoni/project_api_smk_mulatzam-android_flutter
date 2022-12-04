<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\KurikulumModel;
 
class Kurikulum extends ResourceController
{
    use ResponseTrait;
    // all data kelas
    public function index()
    {
        $model = new KurikulumModel();
        $data['kurikulum'] = $model->orderBy('id_kurikulum', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new KurikulumModel();
        $data = [
            'id_tahun_ajaran'  => $this->request->getVar('id_tahun_ajaran'),
            'id_jurusan'  => $this->request->getVar('id_jurusan'),
            'semester'  => $this->request->getVar('semester'),
            'id_pelajaran'  => $this->request->getVar('id_pelajaran'),
            'kategori_mapel'  => $this->request->getVar('kategori_mapel'),
            'id_koordinator_mapel'  => $this->request->getVar('id_koordinator_mapel'),
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
        $model = new KurikulumModel();
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
        $model = new KurikulumModel();
        $id = $this->request->getVar('id_kartu_rencana_studi');
        $data = [
            'id_tahun_ajaran'  => $this->request->getVar('id_tahun_ajaran'),
            'id_jurusan'  => $this->request->getVar('id_jurusan'),
            'semester'  => $this->request->getVar('semester'),
            'id_pelajaran'  => $this->request->getVar('id_pelajaran'),
            'kategori_mapel'  => $this->request->getVar('kategori_mapel'),
            'id_koordinator_mapel'  => $this->request->getVar('id_koordinator_mapel'),
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
        $model = new KurikulumModel();
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