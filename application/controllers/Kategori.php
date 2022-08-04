<?php

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_m');
    }
    public function index()
    {
        $data = [
            'view_file' => "admin/moduls/kategori",
            'kategori' => $this->Kategori_m->getAllKategori()
        ];
        return $this->load->view('admin/admin_view', $data);
    }
    public function create()
    {
        $data = [
            "nama_kategori" => $this->input->post('nama_kategori', true),
            "nama_kategori_en" => $this->input->post('nama_kategori_en', true),
        ];
        $this->db->insert('tb_kategori', $data);
        redirect('Kategori');
    }
    public function delete($id)
    {
        $data = $this->Kategori_m->getKategoriById($id);
        $this->Kategori_m->delete($data['id_kategori']);
        redirect('Kategori');
    }
    public function edit()
    {
        $data = [
            "nama_kategori" => $this->input->post('nama_kategori', true),
            "nama_kategori_en" => $this->input->post('nama_kategori_en', true),
        ];
        $this->db->where('id_kategori', $this->input->post('id_kategori'));
        $this->db->update('tb_kategori', $data);
        redirect('kategori');
    }
}
