<?php

class Model_pembeli extends CI_Model
{
    function TampilPembeli()
    {
        $this->db->order_by("no_pembeli", "ASC");
        return $this->db->from("pembeli")->get()->result();
    }
}