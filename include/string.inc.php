<?php
    function Last( $str ){
        return ($str == '' || $str == null) ? 'empty string' : $str[strlen($str)-1];
    }

	function WithoutLast( $str ){
		return ($str == '' || $str == null) ? 'empty string' : substr($str, 0, (strlen($str)-1));
	}

	function Reverse( $str ){
		return ($str == '' || $str == null) ? 'empty string' : strrev($str);
	}