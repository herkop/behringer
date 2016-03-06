<?php
/**
 * Created by PhpStorm.
 * User: Herko
 * Date: 2.03.2016
 * Time: 12:44
 */

echo"Hello world!";

$url = parse_url(getenv("postgres://mcnptqegvzaixb:lGS_pncoLTlIx5DzMybQxA4_R2@ec2-54-247-167-90.eu-west-1.compute.amazonaws.com:5432/d8m5d1ggv02dvb"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

if(mysqli_connect_errno()){
    echo"Failed to connect database!";
    echo mysqli_connect_error();
}
else{
    echo"Connected to databse!";
}

echo"......2";