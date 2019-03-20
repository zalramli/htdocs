<?php

defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

class Mahasiswa extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model', 'mahasiswa');
        //per jam 100x
        $this->methods['index_get']['limit'] = 100;
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $mahasiswa = $this->mahasiswa->get_mahasiswa();
        } else {
            $mahasiswa = $this->mahasiswa->get_mahasiswa($id);
        }
        if ($mahasiswa) {
            $this->response([
                'status' => true,
                'data' => $mahasiswa
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data Tidak Ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function index_delete()
    {
        $id = $this->delete('id');
        if ($id == null) {
            $this->response([
                'status' => false,
                'message' => 'Anda butuh parameter id'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->mahasiswa->delete_mahasiswa($id) > 0) {
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'Data berhasil dihapus'
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Id tidak ditemukan'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
    public function index_post()
    {
        $data = [
            'nrp' => $this->post('nrp'),
            'nama' => $this->post('nama'),
            'email' => $this->post('email'),
            'jurusan' => $this->post('jurusan')
        ];
        if ($this->mahasiswa->create_mahasiswa($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'gagal ditambahkan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'nrp' => $this->put('nrp'),
            'nama' => $this->put('nama'),
            'email' => $this->put('email'),
            'jurusan' => $this->put('jurusan')
        ];
        if ($this->mahasiswa->update_mahasiswa($data, $id) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data berhasil diupdate'
            ], REST_Controller::HTTP_NO_CONTENT);
        } else {
            $this->response([
                'status' => false,
                'message' => 'gagal diupdate'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
