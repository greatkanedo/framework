<?php
namespace helper;

class Helper {

	public static function dump($var) {
		var_dump($var);
		die;
	}

	public static function pre($var) {
		echo '<pre />';
		print_r($var);
		die;
	}

}