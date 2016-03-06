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
//$result1 = pg_query($db, "INSERT INTO LOGS (ID, LOG) VALUES (2, 'lisatud')");
echo "b";
//if(!$result1){
//   echo"er2";
//}
$result2 = pg_query($db, "SELECT * FROM LOGS");
echo "c";
if(!$result2){
    echo"er3";
}
while($row = pg_fetch_assoc($result2)){
    echo $row["id"] . " " . $row["log"] . "<br>";
}
pg_close($db);
echo"......2";
?>
<head>
    <title>E-Hääletus</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css">
    @import "./style/defaultstyle.css";
    </style>
</head>

<div id="header">
	<h1>Tere tulemast e-hääletamiste lehele!</h1>
	<table><tr>
			<td><a href="./pages/textpage.html">Valimistest</a></td>
			<td><a href="./pages/kandidaadid.html">Kandidaatide nimekiri</a></td>
			<td><a href="./pages/textpage.html">Abi</a></td>
			<td><a href="./pages/index.html">Eesti</a></td>
			<td><a href="./pages/englishindex.html">English</a></td>
	</tr></table>
</div>

<div id="contentcontainer">
	<div id="logininfo"><p>Siia tuleb lühike selgitav tekst sisselogimisest, valimisest vms, võibolla pilt taustaks.</p><p>tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst</p><p>tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst-tekst</p></div>
	<div id="loginfields">
		<div id="togglebuttons">
			<button class="togglebtn">ID-Kaart</button><!--
	 	 --><button class="togglebtn">Digi-ID</button><!--
	 	 --><button class="togglebtn">Mobiil-ID</button>
		</div>
		<form action="./pages/loggedin.html">
			<br><br>
			<b>Salasõna: </b><br>
			<input type="text"><br><br>
			<input type="submit" value="Autendi">
		</form>
	</div>
</div>