<?php

$server = "127.0.1.1:80";
$username = "root";
$password = "Izzy2015@";
$db = "client_info";

$conn = mysqli_connect( $server, $username, $password, $db );

if( !$conn ) {
    die("Connection failed: " . mysqli_connect_error() );
}

?>
