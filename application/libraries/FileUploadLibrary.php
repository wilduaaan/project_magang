<?php
defined('BASEPATH') or die('No direct script access allowed!');

class FileUploadLibrary
{
    private $CodeIgniter;

    private $configuration = array();
    private $data = null;

    public function __construct()
    {
        $this->CodeIgniter = &get_instance();

        $this->library();
    }

    private function library()
    {
        $this->CodeIgniter->load->library('upload');
    }

    public function setConfig($config = array())
    {
        if (is_array($config)) {
            $this->configuration = $config;
        }

        return $this;
    }

    public function initialize()
    {
        if (count($this->configuration) > 0) {
            $this->CodeIgniter->upload->initialize($this->configuration);
        }

        return $this;
    }

    public function upload($index)
    {
        $doUpload = $this->CodeIgniter->upload->do_upload($index);

        if ($doUpload) {
            $this->data = $this->CodeIgniter->upload->data();
        }

        return $doUpload;
    }

    public function get_file_name()
    {
        if (!is_null($this->data)) {
            return $this->data['file_name'];
        }

        return null;
    }

    public function remove($file_name, $path)
    {
        if (file_exists(realpath($path . "/$file_name"))) {
            @unlink(realpath($path . "/$file_name"));

            return true;
        }

        return false;
    }
}
