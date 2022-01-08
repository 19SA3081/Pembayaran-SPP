<?php

defined('BASEPATH') or exit('No direct script access allowed');

//require APPPATH . '/libraries/REST_Controller.php';
require('application/libraries/REST_Controller.php');
//use Restserver\Libraries\REST_Controller;

class Kontak extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get()
    {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->query('select * from telepon')->result();
        } else {
            $kontak = $this->db->query('select * from telepon where id=' . $id)->result();
        }
        $this->response($kontak, 200);
        //$this->response(array("result"=>$kontak, 200));

    }

    //Mengirim atau menambah data kontak baru
    function index_post()
    {
        $id = $this->post('id');
        $nama = $this->post('nama');
        $nomor = $this->post('nomor');


        $kontak = $this->db->query(" insert into telepon (nama,nomor) values ('" . $nama . "','" . $nomor . "') ");

        if ($kontak) {
            $this->response(array("result" => $kontak, 200));
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data kontak yang telah ada
    function index_put()
    {
        $id = $this->put('id');
        $nama = $this->put('nama');
        $nomor = $this->put('nomor');


        $kontak = $this->db->query("update telepon set nama='" . $nama . "',nomor='" . $nomor . "' where id=" . $id);

        if ($kontak) {
            $this->response(array("result" => $kontak, 200));
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data kontak
    function index_delete()
    {
        $id = $this->delete('id');
        $delete = $this->db->query('delete from telepon where id=' . $id);
        if ($delete) {
            $this->response(array('status' => 'success'), 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Masukan function selanjutnya disini
}
