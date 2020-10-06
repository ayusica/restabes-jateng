<?php

class Login_model extends CI_Model
{
    //cek nrp dan password personel
    public function auth_personel($nrp)
    {
        // return $this->db->query("SELECT * FROM personel WHERE nrp='$nrp'  AND pass='$password' LIMIT 1")->row_array();
        return $this->db->query("SELECT * FROM personel WHERE nrp='$nrp' ")->row_array();
    }
}
