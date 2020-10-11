<?php

class Instansi_model extends CI_Model
{
    //daftar instansi
    public function daftar_instansi()
    {
        return $this->db->get('instansi')->result_array();
    }

    //data per instansi
    public function lihat_instansi($id_instansi)
    {
        $this->db->select('*');
        $this->db->from('personel');
        $this->db->join('instansi', 'personel.id_instansi = instansi.id_instansi');
        $this->db->where('instansi.id_instansi=', $id_instansi);
        $query = $this->db->get();

        return $query->row_array();
    }

    //bagian
    public function unsur_bagian()
    {
        return $this->db->get('bagian')->result_array();
    }

    //daftar polsek
    public function daftar_polsek()
    {
        $this->db->select('*');
        $this->db->from('instansi');
        $this->db->where('id_instansi !=', 1);
        return $this->db->get()->result_array();
    }

    //instansi
    public function instansiID($id_instansi)
    {
        $this->db->select('*');
        $this->db->from('instansi');
        $this->db->where('id_instansi', $id_instansi);
        $query = $this->db->get();

        return $query->row_array();
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : getInstansi
     * fungsi : mendapat instansi dg id_instansi
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/
    public function get_editInstansi($idInstansi)
    {
        $this->db->select('*');
        $this->db->from('instansi');
        $this->db->where('instansi.id_instansi=', $idInstansi);
        $query = $this->db->get();

        return $query->row();
    }
}
