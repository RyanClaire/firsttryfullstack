<?php

$sname= "localhost";
$id= "root";
$name= "";
$address= "";
$number= "";
$date= "";

$db_name= "first";

$conn = mysqli_connect("localhost", "root", "" , "", "", 'first');

if (!$conn) {
    echo "Connection failed!";
}