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
$host     = 'localhost';
$user     = 'root';
$password = '';
$name     = 'code_mu';


$connect = mysqli_connect( $host, $user, $password, $name );
mysqli_query( $connect, "SET NAMES 'utf8'" );
$query = "SELECT * FROM users";
$res = mysqli_query( $connect, $query ) or die( mysqli_error( $connect ) );

for ( $data = []; $result = mysqli_fetch_assoc( $res ); $data[] = $result ) {
}
var_dump( $data );

?>
</body>
</html>
