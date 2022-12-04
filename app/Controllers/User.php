<?php
 
namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
 
class User extends ResourceController
{
    use ResponseTrait;
    // all users
    public function index()
    {
        $model = new UserModel();
        $data['user'] = $model->orderBy('id_user', 'DESC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $model = new UserModel();
        $data = [
            'oid' => $this->request->getVar('oid'),
            'role'  => $this->request->getVar('role'),
            'username'  => $this->request->getVar('username'),
            'password'  => sha1($this->request->getVar('password')),
        ];
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data User berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single user
    public function show($id = null)
    {
        $model = new UserModel();
        $data = $model->where('id_user', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $model = new UserModel();
        $id = $this->request->getVar('id_user');
        $data = [
            'oid' => $this->request->getVar('oid'),
            'role'  => $this->request->getVar('role'),
            'username'  => $this->request->getVar('username'),
            'password'  => $this->request->getVar('password'),
        ];
        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data User berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($id = null)
    {
        $model = new UserModel();
        $data = $model->where('id_user', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data User berhasil dihapus.'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
}