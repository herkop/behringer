<?php

echo"test";
include("config.php");

if($db){
    echo "You are in!";
}
else{
    echo "You are not in!";
}