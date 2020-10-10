<?php

class Sium_model extends CI_Model
{
    //tambah personel polsek
    public function tambah_personel_polsek()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "pkt" => $this->input->post('pkt', true),
            "jabatan" => $this->input->post('jabatan', true),
            "tempat" => $this->input->post('tempat', true),
            "tgl_lahir" => $this->input->post('tglLahir', true),
            "agama" => $this->input->post('agama', true),
            "suku" => $this->input->post('suku', true),
            "tmt_jab" => $this->input->post('tmtJab', true),
            "pass" => md5(strrev($this->input->post('nrp', true))),
            "id_instansi" => $this->input->post('idInstansi', true),
            "id_bagian" => $this->input->post('idBagian', true),
            "level" => 'personel',
            "gambar" => 'default.png'
        ];
        $this->db->insert('personel', $data);
    }

    //lihat polsek
    public function lihat_polsek($id_instansi)
    {
        $this->db->select('*');
        $this->db->from('personel');
        $this->db->join('instansi', 'personel.id_instansi = instansi.id_instansi');
        $this->db->join('bagian', 'personel.id_bagian = bagian.id_bagian');
        $this->db->where('instansi.id_instansi=', $id_instansi);
        $this->db->order_by('nama_bagian', 'ASC');
        $query = $this->db->get();

        return $query->result_array();
    }
}
