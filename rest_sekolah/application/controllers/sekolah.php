<?php

defined('BASEPATH') or exit('No direct script access allowed');

//require APPPATH . '/libraries/REST_Controller.php';
require('application/libraries/REST_Controller.php');
//use Restserver\Libraries\REST_Controller;

class Sekolah extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
    function index_get()
    {
        $no = $this->get('no');
        if ($no == '') {
            $datasiswa = $this->db->query('select * from datasiswa')->result();
        } else {
            $datasiswa = $this->db->query('select * from datasiswa where no=' . $no)->result();
        }
        $this->response($datasiswa, 200);
        

    }

    //Mengirim atau menambah data kontak baru
    function index_post()
    {
        $no = $this->post('no');
        $nis = $this->post('nis');
        $namasiswa = $this->post('namasiswa');
        $kelas = $this->post('kelas');
        $tahunajaran = $this->post('tahunajaran');
        $biaya = $this->post('biaya');
        $opsi = $this->post('opsi');


        $datasiswa = $this->db->query(" insert into datasiswa (no,nis,namasiswa,kelas,tahunajaran,biaya,opsi) values ('" . $no . "','" . $nis . "','" . $namasiswa . "','" . $kelas . "','" . $tahunajaran . "','" . $biaya . "','" . $opsi . "') ");

        if ($datasiswa) {
            $this->response(array("result" => $datasiswa, 200));
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Memperbarui data kontak yang telah ada
    function index_put()
    {
        $no = $this->put('no');
        $nis = $this->put('nis');
        $namasiswa = $this->put('namasiswa');
        $kelas = $this->put('kelas');
        $tahunajaran = $this->put('tahunajaran');
        $biaya = $this->put('biaya');
        $opsi = $this->put('opsi');


        $datasiswa = $this->db->query("update datasiswa set nis='" . $nis . "',namasiswa='" . $namasiswa . "',kelas='" . $kelas . "',tahunajaran='" . $tahunajaran . "',biaya='" . $biaya . "',opsi='" . $opsi . "' where no=" . $no);

        if ($datasiswa) {
            $this->response(array("result" => $datasiswa, 200));
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data kontak
    function index_delete()
    {
        $no = $this->delete('no');
        $delete = $this->db->query('delete from datasiswa where no=' . $no);
        if ($delete) {
            $this->response(array('status' => 'success'), 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Masukan function selanjutnya disini
}
