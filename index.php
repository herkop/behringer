<?php
/**
 * Created by PhpStorm.
 * User: Herko
 * Date: 2.03.2016
 * Time: 12:44
 */

echo"Hello world!2";
/**
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
*/
$db = pg_connect("dbname=d8m5d1ggv02dvb host=ec2-54-247-167-90.eu-west-1.compute.amazonaws.com port=5432 user=mcnptqegvzaixb password=lGS_pncoLTlIx5DzMybQxA4_R2 sslmode=require");
if(!$db){
    echo "Database con error";
}
else{
    echo "Database in!";
}
$result = pg_query($db, "CREATE table user(ID int NOT NULL AUTO_INCREMENT, name VARCHAR(30))");
echo pg_result_error($result);
$result1 = pq_query($db, "INSERT INTO user (name) VALUES name='Karavan'");
echo pg_result_error($result1);
$result2 = pq_query($db, "SELECT ID, name FROM user");
echo pg_result_error($result2);
while($row = pg_fetch_assoc($result2)){
    echo $row['ID']." ".$row['name']."<br>";
}

echo"......3";