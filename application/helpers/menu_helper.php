<?php

defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('menu_active')) {
	function menu_active($menu)
	{
		$ci = &get_instance();

		$current_menu = $ci->router->class;

		return $current_menu === $menu ? 'class="active"' : NULL;
	}
}

if (!function_exists('JSONResponse')) {
	function JSONResponse($array = array())
	{
		echo json_encode($array);
	}
}

if (!function_exists('JSONResponseDefault')) {
	function JSONResponseDefault($result, $message)
	{
		return JSONResponse(array(
			'RESULT' => $result,
			'MESSAGE' => $message
		));
	}
}
