<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

function getFile( $file ) {
	ob_start();
	include $file;

	return ob_get_clean();
}

$res = getFile( 'header.php' );
echo $res;


echo $res;

echo $res;
require 'functions.php';
var_dump( squre( 15, 2 ) );
?>
</body>
</html>