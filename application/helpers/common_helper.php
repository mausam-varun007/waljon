<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

	

	function generateAuthToken(){
		$charsString= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    return hash('sha512', substr(str_shuffle($charsString), 0, 32));
	}
?>
