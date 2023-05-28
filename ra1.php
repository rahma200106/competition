<?php
$serveur="localhost";
$dbname="iset";
$user="iset1";
$pass="iset12";

try{
    $conn=new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
   
$a=$_POST["usern"];

$b=$_POST["nom"];

$c=$_POST["prenom"];
$d=$_POST["mail"];


$e=$_POST["pass"];
$f=$_POST["rolee"];



$sth=$conn->prepare("INSERT INTO utilisateur3(username,nom,prenom,email,pass,role12)Values(:usern,:nom,;prenom,:mail,:pass,:rolee)");
    
    $sth->bindParam(':usern',$a);
    $sth->bindParam(':nom',$b);
    $sth->bindParam(':prenom',$c);
    $sth->bindParam(':mail',$d);
  
    $sth->bindParam(':pass',$e);
    $sth->bindParam(':rolee',$f);
 
    $sth->execute();
	
    echo"effectuée";
}
catch(PDOException $e){
    echo'erreur';
  }