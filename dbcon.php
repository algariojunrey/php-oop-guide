<?php

$con = mysqli_connect("localhost","root","","practice");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

function connect($host, $user, $pass, $dabname) {
    return mysqli_connect($host, $user, $pass, $dabname);
}

$db1 = connect('localhost', 'root', '', 'practice');
$db2 = connect('youtube.com', 'admin', '', 'oop');

?>