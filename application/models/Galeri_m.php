<?php

class Galeri_m extends CI_Model
{
	public function getAll1()
	{
		return $this->db->get('tb_galeri');
	}

	public function getAlbum()
	{
		return $this->db->get('tb_album');
	}

	public function getPhotoByAlbum($album)
	{
		$this->db->order_by('foto_galeri', 'DESC');
		$this->db->limit(3);
		$this->db->where('nama_album', $album);
		return $this->db->get('tb_galeri');
	}

	public function getIdAlbum($album)
	{
		$this->db->where('nama_album', $album);
		return $this->db->get('tb_album')->row();
	}

	public function getIdAlbumEn($album)
	{
		$this->db->where('nama_album_en', $album);
		return $this->db->get('tb_album')->row();
	}

	public function getPhotoByAlbumDetail($album)
	{
		$this->db->where('nama_album', $album);
		$this->db->order_by('foto_galeri', 'DESC');
		return $this->db->get('tb_galeri');
	}
}
