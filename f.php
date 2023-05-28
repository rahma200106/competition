<?php
$serveur="localhost";
$dbname="iset";
$user="iset1";
$pass="iset12";

try{
    $conn=new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
   
$a=$_POST["a"];

$b=$_POST["b"];

$c=$_POST["c"];
$d=$_POST["d"];


$e=$_POST["e"];
$f=$_POST["f"];



$sth=$conn->prepare("INSERT INTO users(username,nom,prenom,email,pass,role12)Values(:a,:b,:c,:d,:e,:f)");







    
    $sth->bindParam(':a',$a);
    $sth->bindParam(':b',$b);
    $sth->bindParam(':c',$c);
    $sth->bindParam(':d',$d);
  
    $sth->bindParam(':e',$e);
    $sth->bindParam(':f',$f);
 
    $sth->execute();
	
    header("location:add_users.php");
}
catch(PDOException $e){
    echo'erreur';
  }