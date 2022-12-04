<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\JadwalModel;
 
class Jadwal extends ResourceController
{
    use ResponseTrait;
    // all jadwal
    public function index()
    {
        $model = new JadwalModel();
        $data['jadwal'] = $model->orderBy('id_jadwal', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new JadwalModel();
        $data = [
            'id_tahun_ajaran'  => $this->request->getVar('id_tahun_ajaran'),
            'id_hari'  => $this->request->getVar('id_hari'),
            'id_kurikulum'  => $this->request->getVar('id_kurikulum'),
            'id_kelas'  => $this->request->getVar('id_kelas'),
            'id_guru'  => $this->request->getVar('id_guru'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_akhir' => $this->request->getVar('jam_akhir'), 
            'tgl_uts' => $this->request->getVar('tgl_uts'),
            'jam_mulai_uts' => $this->request->getVar('jam_mulai_uts'),
            'jam_akhir_uts' => $this->request->getVar('jam_akhir_uts'),
            'id_soal_uts' => $this->request->getVar('id_soal_uts'), 
            'tgl_uas' => $this->request->getVar('tgl_uas'),
            'jam_mulai_uas' => $this->request->getVar('jam_mulai_uas'),
            'jam_akhir_uas' => $this->request->getVar('jam_akhir_uas'),
            'id_soal_uas' => $this->request->getVar('id_soal_uas')
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data jadwal berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single jadwal
    public function show($id = null)
    {
        $model = new JadwalModel();
        $data = $model->where('id_jadwal', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new JadwalModel();
        $id = $this->request->getVar('id_jadwal');
        $data = [
            'id_tahun_ajaran'  => $this->request->getVar('id_tahun_ajaran'),
            'id_hari'  => $this->request->getVar('id_hari'),
            'id_kurikulum'  => $this->request->getVar('id_kurikulum'),
            'id_kelas'  => $this->request->getVar('id_kelas'),
            'id_guru'  => $this->request->getVar('id_guru'),
            'jam_mulai' => $this->request->getVar('jam_mulai'),
            'jam_akhir' => $this->request->getVar('jam_akhir'), 
            'tgl_uts' => $this->request->getVar('tgl_uts'),
            'jam_mulai_uts' => $this->request->getVar('jam_mulai_uts'),
            'jam_akhir_uts' => $this->request->getVar('jam_akhir_uts'),
            'id_soal_uts' => $this->request->getVar('id_soal_uts'), 
            'tgl_uas' => $this->request->getVar('tgl_uas'),
            'jam_mulai_uas' => $this->request->getVar('jam_mulai_uas'),
            'jam_akhir_uas' => $this->request->getVar('jam_akhir_uas'),
            'id_soal_uas' => $this->request->getVar('id_soal_uas')
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data jadwal berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($id = null)
    {
        $model = new JadwalModel();
        $data = $model->where('id_jadwal', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data jadwal berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}