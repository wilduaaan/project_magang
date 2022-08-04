<?php

class Album extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Album_m');
    }
    public function index()
    {
        $data = [
            'view_file' => 'admin/moduls/album',
            'album' => $this->Album_m->getAllAlbum()
        ];
        return $this->load->view('admin/admin_view', $data);
    }
    public function create()
    {
        $data = [
            "nama_album" => $this->input->post('nama_album', true),
            "nama_album_en" => $this->input->post('nama_album_en', true),
        ];
        $this->db->insert('tb_album', $data);
        redirect('Album');
    }
    public function delete($id)
    {
        $data = $this->Album_m->getAlbumById($id);
        $this->Album_m->delete($data['id_album']);
        redirect('Album');
    }
    public function edit()
    {
        $data = [
            "nama_album" => $this->input->post('nama_album', true),
            "nama_album_en" => $this->input->post('nama_album_en', true),
        ];
        $this->db->where('id_album', $this->input->post('id_album'));
        $this->db->update('tb_album', $data);
        redirect('Album');
    }
}
