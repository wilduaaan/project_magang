<?php
defined('BASEPATH') or die('No direct script access allowed');

function getPost($index, $default = null)
{
    $CI = &get_instance();

    if ($CI->input->post($index)) {
        return $CI->input->post($index);
    }

    return $default;
}
