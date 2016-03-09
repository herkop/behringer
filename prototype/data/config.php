<?php

//$db = pg_connect("dbname=d8m5d1ggv02dvb host=ec2-54-247-167-90.eu-west-1.compute.amazonaws.com port=5432 user=mcnptqegvzaixb password=lGS_pncoLTlIx5DzMybQxA4_R2 sslmode=require");

$mysql_hostname = "ec2-54-247-167-90.eu-west-1.compute.amazonaws.com";
$mysql_port = "5432";
$mysql_user = "mcnptqegvzaixb";
$mysql_password = "lGS_pncoLTlIx5DzMybQxA4_R2";
$mysql_database = "d8m5d1ggv02dvb";
$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database, $mysql_port)or die("Opps some thing went wrong");
//mysqli_select_db($mysql_database, $bd)or die("Opps some thing went wrong");
echo mysqli_connect_error();