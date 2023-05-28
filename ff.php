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






$sth=$conn->prepare("INSERT INTO produit(id,libelle_prod,description_prod,prix_prod)Values(:a,:b,:c,:d)");
    
    $sth->bindParam(':a',$a);
    $sth->bindParam(':b',$b);
    $sth->bindParam(':c',$c);
    $sth->bindParam(':d',$d);
  
   
 
    $sth->execute();
	
    header("location:add_prod.php");
}
catch(PDOException $e){
    echo'erreur';
  }