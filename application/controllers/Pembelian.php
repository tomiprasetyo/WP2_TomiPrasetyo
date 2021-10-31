<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_pembeli");
    }

    public function index()
    {
        $data["hasil"] = $this->model_pembeli->TampilPembeli();
        $this->load->view("view-pembeli", $data);
    }

    public function tambah()
    {
        $this->load->view("view-toko");
    }

    public function simpan_pembeli()
    {
        $data = array(
            "no_pembeli" => $this->input->post("no_pembeli"),
            "nama_pembeli" => $this->input->post("nama_pembeli"),
            "no_hp" => $this->input->post("no_hp"),
            "merk" => $this->input->post("merk"),
            "harga" => $this->input->post("harga"),
            "ukuran" => $this->input->post("ukuran")
        );

        $this->db->insert("pembeli", $data);
        redirect("pembelian/index");
    }
}