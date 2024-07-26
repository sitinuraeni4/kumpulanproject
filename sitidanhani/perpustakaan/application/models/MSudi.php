<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSudi extends CI_Model
{
    function AddData($tabel, $data=array())
    {
        $this->load->database();
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->load->database();
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->load->database();
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        $this->load->database();
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere($tabel,$id,$nilai)
    {
        $this->load->database();
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query;
    }

    function GetCariBuku($cari)
    {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM tbl_buku WHERE nama_buku LIKE '%$cari%'");
        return $query->result();
    }

    public function get_pengadaan() {
        // Lakukan query database untuk mengambil data produk
        $this->load->database();
        $this->db->select('*');
        $this->db->from('tbl_buku');
        $this->db->order_by('nama_buku', 'DESC'); // Mengurutkan berdasarkan nama (contoh)
        $query = $this->db->get();

        return $query->result();
    }

}