<?php

class Urmin_model extends CI_Model
{
    public function polrestabes_personel()
    {
        $this->db->select('*');
        $this->db->from('personel');
        $this->db->join('bagian', 'personel.id_bagian = bagian.id_bagian');
        $this->db->where('id_instansi=', 1);
        // $this->db->order_by('nama', 'ASC');
        // $this->db->order_by('nama_bagian', 'ASC');
        return $this->db->get()->result_array();
    }

    public function tambah_personel_polrestabes()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "pkt" => $this->input->post('pkt', true),
            "jabatan" => $this->input->post('jabatan', true),
            "tempat" => $this->input->post('tempat', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "agama" => $this->input->post('agama', true),
            "suku" => $this->input->post('suku', true),
            "tmt_jab" => $this->input->post('tmt_jab', true),
            "pass" => md5(strrev($this->input->post('nrp', true))),
            "id_instansi" => 1,
            "level" => 'personel',
            "gambar" => 'default.png',
            "id_bagian" => $this->input->post('id_bagian', true)
        ];
        $this->db->insert('personel', $data);
    }

    public function hapusAja()
    {
        $this->db->where('nrp', $this->input->post('nrp'));
        $this->db->delete('personel');
    }

    public function update_PolPersonel()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "pkt" => $this->input->post('pkt', true),
            "jabatan" => $this->input->post('jab', true),
            "tempat" => $this->input->post('tempat', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "suku" => $this->input->post('suku', true),
            "tmt_jab" => $this->input->post('tmt_jab', true),
            "id_bagian" => $this->input->post('id_bagian', true),
            "id_instansi" => $this->input->post('id_instansi', true)
        ];

        $this->db->where('nrp', $this->input->post('nrp'));
        $this->db->update('personel', $data);
    }

    public function  getPersonelBagian($id_bagian)
    {
        $this->db->select('*');
        $this->db->from('personel');
        if ($id_bagian != 0) {
            $this->db->where('id_bagian=', $id_bagian);
        }
        $this->db->where('id_instansi=', 1);
        // $this->db->limit(20);
        $this->db->order_by('nama', 'ASC');
        return $this->db->get()->result_array();
    }

    public function  personel_bagpdf($id_bagian)
    {
        $this->db->select('*');
        $this->db->from('personel');
        $this->db->join('bagian', 'personel.id_bagian = bagian.id_bagian');
        if ($id_bagian != 0) {
            $this->db->where('personel.id_bagian=', $id_bagian);
        }
        $this->db->where('id_instansi=', 1);
        // $this->db->limit(20);
        $this->db->order_by('nama', 'ASC');
        return $this->db->get()->result_array();
    }
    // public function  getPersonelBagian($id_bagian, $rowno, $rowperpage)
    // {
    //     $this->db->select('*');
    //     $this->db->from('personel');
    //     $this->db->where('id_bagian=', $id_bagian);
    //     $this->db->where('id_instansi=', 1);
    //     $this->db->limit($rowno, $rowperpage);
    //     return $this->db->get()->result_array();
    // }

    //total record
    public function getHitungrecord($id_bagian)
    {
        $this->db->select('count(*) as hitung');
        $this->db->from('personel');
        $this->db->where('id_bagian=', $id_bagian);
        $this->db->where('id_instansi=', 1);
        $query = $this->db->get()->result_array();

        return $query[0]['hitung'];
    }

    /****************Collapse******************/

    public function bagsumda()
    {
        $this->db->select('*');
        $this->db->from('personel');
        $this->db->join('bagian', 'personel.id_bagian = bagian.id_bagian');
        $this->db->where('id_instansi=', 1);
        $this->db->where('personel.id_bagian=', 6);
        $this->db->order_by('nama', 'ASC');
        return $this->db->get()->result_array();
    }
    public function siwas()
    {
        $this->db->select('*');
        $this->db->from('personel');
        $this->db->join('bagian', 'personel.id_bagian = bagian.id_bagian');
        $this->db->where('id_instansi=', 1);
        $this->db->where('bagian.nama_bagian=', 'siwas');
        $this->db->order_by('nama', 'ASC');
        return $this->db->get()->result_array();
    }
}
