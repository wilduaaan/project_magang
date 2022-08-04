<?php

class M_tentang extends CI_Model
{
    private $table = 'tb_tentang';

    public function tentang($id = '')
    {
        $this->db->select('*')
            ->from($this->table);

        if ($id) {
            $this->db->where('id_tentang', $id);
        }

        return $this->db->get();
    }

    public function insert($data = array())
    {
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->where('id_tentang', $id);
        return $this->db->delete($this->table);
    }

    public function update($id, $data = array())
    {
        $this->db->set($data);
        $this->db->where('id_tentang', $id);
        return $this->db->update($this->table);
    }

    public function getTitle() {
		$this->db->select('nama_tentang');
		return $this->db->get('tb_tentang')->row();
	}
    public function getDesc() {
		$this->db->select('deskripsi_tentang');
		return $this->db->get('tb_tentang')->row();
	}
    public function getMainMarket() {
		$this->db->select('main_market');
		return $this->db->get('tb_tentang')->row();
	}
}
