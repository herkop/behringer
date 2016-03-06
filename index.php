<?php
/**
 * Created by PhpStorm.
 * User: Herko
 * Date: 2.03.2016
 * Time: 12:44
 */

echo"Hello world!1";
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
/**
$sql =<<<EOF
      CREATE TABLE COMPANY
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      AGE            INT     NOT NULL,
      ADDRESS        CHAR(50),
      SALARY         REAL);
EOF;
$ret = pg_query($db, $sql);
if(!$ret){
    echo pg_last_error($db);
} else {
    echo "Table created successfully\n";
}
pg_close($db);
*/
//result = pg_query($db, "CREATE TABLE IF NOT EXISTS LOGS (ID INT PRIMARY KEY NOT NULL, LOG VARCHAR(30))");
echo "a";
//if(!$result){
//    echo"er1";
//}
$result1 = pg_query($db, "INSERT INTO LOGS (ID, LOG) VALUES (1, 'lisatud')");
echo "b";
if(!$result1){
   echo"er2";
}
$result2 = pg_query($db, "SELECT ID, LOG FROM LOGS");
echo "c";
if(!$result2){
    echo"er3";
}
while($row = pg_fetch_assoc($result2)){
    echo $row[0]." ".$row[1]."<br>";
}
pg_close($db);
echo"......2";