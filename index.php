<?php
/**
 * Created by PhpStorm.
 * User: Herko
 * Date: 2.03.2016
 * Time: 12:44
 */

echo"Hello world!";

$url = parse_url(getenv("postgres://urkzjhkrnsmmma:vilUq5-DOJ831Ukdg42HPeFf-b@ec2-107-20-148-211.compute-1.amazonaws.com:5432/d93bm3dnngfcgt"));

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