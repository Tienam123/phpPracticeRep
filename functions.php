<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'my_db';

$link = mysqli_connect( $host, $user, $pass, $name );
mysqli_query( $link, "SET NAMES 'utf8'" );
$query = 'SELECT * FROM users';
$res = mysqli_query( $link, $query ) or die( mysqli_error( $link ) );
for ( $data = []; $row = mysqli_fetch_assoc( $res ); $data[] = $row ) {
}
$userFromDB  = $data[0]['name'];
$user2FromDB = $data[1]['name'] . $data[1]['age'];

$user3FromDB = 'Имя: ' . $data[2]['name'] . ' Возраст: ' . $data[2]['age'] . ' Зарплата: ' . $data[2]['salary'];
echo "$userFromDB";
echo "<hr>";
echo "$user2FromDB";
echo "<hr>";
echo "$user3FromDB";
echo "<hr>";
$link = mysqli_connect( $host, $user, $pass, $name );
mysqli_query( $link, "SET NAMES 'utf8'" );
$query = "INSERT INTO users (name, age) VALUES ('user', 30)";
$res = mysqli_query( $link, $query ) or die( mysqli_error( $link ) );
var_dump( $res );

?>