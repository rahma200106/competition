<?php
$serveur="localhost";
$dbname="iset";
$user="iset1";
$pass="iset12";

try{
    $conn=new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
   
$a=$_POST["nom"];




$sth=$conn->prepare("delete from users where username='$a'");
    
  
  
   
    
    
    $sth->execute();
	
    header("location:suppression.php")
}
catch(PDOException $e){
    echo'erreur';
  }