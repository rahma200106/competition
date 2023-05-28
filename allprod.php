<!DOCTYPE html>
<html lang="en">
<?php

$serveur="localhost";
$dbname="iset";
$user="iset1";
$pass="iset12";
  
$dsn = "mysql:host=$serveur;dbname=$dbname"; 

$sql = "SELECT * FROM produit";
 
try{
 $pdo = new PDO($dsn, $user, $pass);
 $stmt = $pdo->query($sql);
 
 if($stmt === false){
  die("Erreur");
 }
 
}catch (PDOException $e){
  echo $e->getMessage();
}
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
	<link rel="icon" type="image/png" sizes="16x16" href="images/foodpicky.png">
    <title>Admin Dashboard</title>

    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="fix-header fix-sidebar">
    
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
   
    <div id="main-wrapper">
       
         <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                
             
                
                <div class="navbar-collapse">
                    
                    <ul class="navbar-nav mr-auto mt-md-0">
                       
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                     
                       
                    </ul>
                    
                   
                </div>
            </nav>
        </div>
       
        <div class="left-sidebar">
            
            <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                   <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Admin Panel</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Home</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="dashboard.php">Accueil</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-label">Options</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false">  <span><i class="fa fa-user f-s-20 "></i></span><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="allusers.php">All Users</a></li>
								<li><a href="add_users.php">Add Users</a></li>
                                <li><a href="suppression.php">Delete user</a></li>
								
                               
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">produits</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="allrestraunt.php">All produits</a></li>
								<li><a href="add_prod.php">add produit</a></li>
        
                                
                            </ul>
                        </li>
                      
						 <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hide-menu">Contact</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="contact.php">boite reception</a></li>
								  
                            </ul>
                        </li>
                         
                    </ul>
                </nav>
                
            </div>
         
        </div>
      
        <div class="page-wrapper">
          
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">All Users Info</h3> </div>
               
            </div>
           
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-12">
                        
                       
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Registered products</h4>
                             
                                <div class="table-responsive m-t-40">
                                <table border="10px black radius">
   <thead>
     <tr>
       <th >id</th>
       <th>libelle_prod</th>
       <th>description</th>
       <th>prix</th>
      
       
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['id']); ?></td>
       <td><?php echo htmlspecialchars($row['libelle_prod']); ?></td>
       <td><?php echo htmlspecialchars($row['description_prod']); ?></td>
       <td><?php echo htmlspecialchars($row['prix_prod']); ?></td>
       
      
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>
                                </div>
                            </div>
                        </div>
						 </div>
                      
                            </div>
                        </div>
                    </div>
                </div>
       
            </div>
       
        </div>
       
    </div>
 
    <script src="js/lib/jquery/jquery.min.js"></script>

    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="js/jquery.slimscroll.js"></script>
    
    <script src="js/sidebarmenu.js"></script>
   
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    
    <script src="js/custom.min.js"></script>


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>