<?php

class Album_m extends CI_Model
{
    public function getAllAlbum()
    {
        return $this->db->get('tb_album')->result_array();
    }
    public function getAlbumById($id)
    {
        return $this->db->get_where('tb_album', ['id_album' => $id])->row_array();
    }
    public function delete($id)
    {
        $this->db->where('id_album', $id);
        $this->db->delete('tb_album');
    }
    public function joinalbum($id)
    {
        $this->db->select('*');
        $this->db->from('tb_galeri');
        $this->db->join('tb_album', 'tb_album.id_album=tb_galeri.nama_album');
        $return = $this->db->where('id_galeri', $id)->get();
        if ($return->num_rows() > 0) {
            return $return->result();
        } else {
            return false;
        }
    }
}
