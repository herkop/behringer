<?php
/**
 * Created by PhpStorm.
 * User: Herko
 * Date: 2.03.2016
 * Time: 12:44
 */

echo"Hello world!";

$url = parse_url(getenv("postgres://kmeuaardudjwqp:qUyoFbXt78mblu_CEcezXhgCxw@ec2-54-227-250-148.compute-1.amazonaws.com:5432/d7fdmpdh0nvpmu"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);