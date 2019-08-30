<?php

if(isset($_POST['submit'])){
$link = $_POST['link'];
$categorie = $_POST['categorie']; 
$source= $_POST['source']; 
$type= $_POST['posttype'];
$author = $_POST['author'];
//TODO SANITIZE STRINGS !
echo "You have submitted :" .$link."<br>"; 
echo "in deze categorie : ". $categorie."<br>";
echo "komt van deze bron : ".$source."<br>";
echo "Is van het volgende type : ".$type."<br>";
echo "en van deze auteur :".$author."<br>";

require_once('verwerk.inc.php');
require_once('output.inc.php');
} 
?>

