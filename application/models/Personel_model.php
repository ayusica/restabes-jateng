<?php

class Personel_model extends CI_Model
{
    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : detailPersonel
     * fungsi : untuk detail seluruh data tabel personel
                dan instansi berdasarkan nrp personel
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/
    public function detailPersonel($nrp)
    {
        $this->db->select('*');
        $this->db->from('personel');
        $this->db->join('instansi', 'personel.id_instansi = instansi.id_instansi');
        $this->db->join('bagian', 'personel.id_bagian = bagian.id_bagian');
        $this->db->where('personel.nrp=', $nrp);
        $query = $this->db->get();

        return $query->result_array();
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : geteditPersonel
     * fungsi : mendapat detail data yang akan diedit 
                berdasarkan nrp personel terkait
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/
    public function geteditPersonel($nrp)
    {
        $this->db->select('*');
        $this->db->from('personel');
        $this->db->join('instansi', 'personel.id_instansi = instansi.id_instansi');
        $this->db->join('bagian', 'personel.id_bagian = bagian.id_bagian');
        $this->db->where('personel.nrp=', $nrp);
        $query = $this->db->get();

        return $query->row();
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : detailPersonel
     * fungsi : untuk detail seluruh data tabel personel 
                berdasarkan nrp personel
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/
    public function detailitu($nrp)
    {
        $this->db->select('*');
        $this->db->from('personel');
        $this->db->where('nrp', $nrp);
        $query = $this->db->get();

        return $query->row_array();
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : ubahPass
     * fungsi : mengubah Password (urmin, sium) sipoda polrestabes
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/
    public function ubahPass()
    {
        $data = [
            "pass" => md5($this->input->post('new_password', true))
        ];

        $this->db->where('nrp', $this->session->userdata('nrp'));
        $this->db->update('personel', $data);
    }

    public function ubahPassPer()
    {
        $data = [
            "pass" => md5($this->input->post('baruPassword', true))
        ];

        $this->db->where('nrp', $this->session->userdata('nrp'));
        $this->db->update('personel', $data);
    }
    //cari
    public function cariData()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('jabatan', $keyword);
        return $this->db->get('personel')->result_array();
    }
}
