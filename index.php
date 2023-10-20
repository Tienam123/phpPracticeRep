<?php

$_GET['dkfljsfksdjf'] = 'Uzhas';

function &reMake( $str ) {
	$_GET['dkfljsfksdjf'] = $str;

	return $_GET['dkfljsfksdjf'];
}

$new = &reMake( 'Ne uszas' );
var_dump( $new );

$new = '2222222';

var_dump( $new );
var_dump( $_GET['dkfljsfksdjf'] );