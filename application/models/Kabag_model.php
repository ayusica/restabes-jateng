<?php

class Kabag_model extends CI_Model
{
    /*----------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : getAllPersonel
     * fungsi : mendapat semua data personel pada tabel personel
     * tgl    : 27 Januari 2020
     * ---------------------------------------------------------*/

    public function getAllPersonel()
    {
        $this->db->select('*');
        $this->db->from('personel');
        $this->db->order_by('nama', 'ASC');
        return $this->db->get()->result_array();
    }


    /*----------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : HitungJumlahPersonel
     * fungsi : mendapat jumlah data personel pada tabel personel
     * tgl    : 21 Februari 2020
     * ---------------------------------------------------------*/
    public function HitungJumlahPersonel()
    {
        return $this->db->get('personel')->num_rows();
    }

    /*----------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : HitungJumlahPolsek
     * fungsi : mendapat jumlah kesatuan pada tabel personel
     * tgl    : 21 Februari 2020
     * ---------------------------------------------------------*/
    public function HitungJumlahPolsek()
    {
        return $this->db->get('instansi')->num_rows();
    }

    /*----------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : jumperInstansi
     * fungsi : mendapat jumlah data personel pada tabel personel
     *          berdasarkan instansi
     * tgl    : 21 Februari 2020
     * ---------------------------------------------------------*/
    public function jumperInstansi()
    {
        $sql = "SELECT I.nama_instansi as kesatuan, count(P.id_instansi) as jumlah from personel as P left join instansi as I on I.id_instansi = P.id_instansi group by P.id_instansi order by kesatuan ASC";

        return $this->db->query($sql)->result();
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : ubahPassAdmin
     * fungsi : mengubah Password admin sipoda polrestabes
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/
    public function ubahPassAdmin()
    {
        $data = [
            "pass" => md5($this->input->post('newPassword', true))
        ];

        $this->db->where('nrp', $this->input->post('nrp'));
        $this->db->update('personel', $data);
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : kelolaAdmin
     * fungsi : mendapat admin" sipoda polrestabes
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/
    public function kelolaAdmin()
    {
        $this->db->select('nama, nrp, jabatan, level, nama_instansi');
        $this->db->from('personel');
        $this->db->join('instansi', 'personel.id_instansi= instansi.id_instansi');
        $level = array('kabag', 'kasium', 'kaurmin');
        $this->db->where_in('level', $level);
        return $this->db->get()->result_array();
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : tambahAdmin
     * fungsi : menambah admin sipoda polrestabes
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/
    public function tambahAdmin()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "jabatan" => $this->input->post('jab', true),
            "pass" => md5($this->input->post('pass', true)),
            "id_instansi" => $this->input->post('id_instansi', true),
            "level" => $this->input->post('level', true)
        ];
        $this->db->insert('personel', $data);
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : update_editPersonel
     * fungsi : mengupdate hasil edit personel 
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/
    public function update_editPersonel()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "jabatan" => $this->input->post('jab', true),
            "level" => $this->input->post('level', true)
        ];

        $this->db->where('nrp', $this->input->post('nrp'));
        $this->db->update('personel', $data);
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : tambahAdmin
     * fungsi : mengupdate admin sipoda polrestabes
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/
    public function update_admin()
    {
        $nrp = $this->input->post('nrp', true);
        $level = $this->input->post('level', true);

        $data = [
            "level" => $level
        ];

        $this->db->where('nrp', $nrp);
        $this->db->update('personel', $data);
    }


    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * model  : tambahAdmin
     * fungsi : menghapus admin sipoda polrestabes (lev personel)
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/
    public function hapusAdmin()
    {
        $data = [
            "level" => 'personel'

        ];

        $this->db->where('nrp', $this->input->post('nrp'));
        $this->db->update('personel', $data);
    }
}
