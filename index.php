<!DOCTYPE html> <!--HTML 5: http://www.w3schools.com/tags/tag_doctype.asp -->
<?php

$lang_file = '';
$lang = '';
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
    $lang = $_GET['lang'];

// register the session and set the cookie
    $_SESSION['lang'] = $lang;

    setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
    $lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
    $lang = $_COOKIE['lang'];
}
else
{
    $lang = 'en';
}
switch ($lang) {
    case 'en':
        $lang_file = 'lang.en.php';
        break;

    case 'et':
        $lang_file = 'lang.et.php';
        break;

    default:
        $lang_file = 'lang.et.php';

}

include "lang/".$lang_file;
?>
<?php require "data/config.php"?>
<?php require("header.php");?> 
<?php require("banner.php");?>
<div id="contentcontainer">
<?php

if (isset($_GET['page'])) {

    if (file_exists('page/' . $_GET['page'] . '.php')) {

        require('page/' . $_GET['page'] . '.php');

    } else if($_GET['page'] = "login"){
        require "content_login.php";
    } else {

        echo '<span class="error">Viga! Sellist lehte ei leidu!</span>';

    }
}
else{
    require("content_login.php");
}

?>
</div>
<?php require("fin.php");?> 
</html>
