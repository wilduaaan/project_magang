<?php

class Kategori_m extends CI_Model
{
    public function getAllKategori()
    {
        return $this->db->get('tb_kategori')->result_array();
    }
    public function getKategoriById($id)
    {
        return $this->db->get_where('tb_kategori', ['id_kategori' => $id])->row_array();
    }
    public function delete($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('tb_kategori');
    }
    public function joinKategori($id)
    {
        $this->db->select('*');
        $this->db->from('tb_layanan');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori=tb_layanan.kategori');
        $return = $this->db->where('id_layanan', $id)->get();
        if ($return->num_rows() > 0) {
            return $return->result();
        } else {
            return false;
        }
    }
}
