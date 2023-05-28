
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>competition</title>
    
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
   
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  
</head>

<body class="fix-header">
    
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
   
    <div id="main-wrapper">
     
         <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                                
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">

                    
                        <span><b></b></span>
                    </a>
                </div>
                
                <div class="navbar-collapse">
                   
                    <ul class="navbar-nav mr-auto mt-md-0">
                        
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                     
                       
                    </ul>
                   
                      
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> LogOut</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
      
        <div class="left-sidebar">
           
            <div class="scroll-sidebar">
             
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Admin </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Home</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="dashboard.php">accueil</a></li>
                                
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
								<li><a href="allprod.php">produits</a></li>
								<li><a href="add_prod.php">ajouter produit</a></li>
                                
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">contact</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="contact.php">boite reception</a></li>
								
                                
                                
                            </ul>
                        </li>
                       
                         
                    </ul>
                </nav>
               
            </div>
          
        </div>
      
        <div class="page-wrapper" style="height:1200px;">
      
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"></h3> </div>
               
            </div>
           
            <div class="container-fluid">
             
                     <div class="row">
                                      
					
					 <div class="container-fluid">
                
                  
									
																						
							
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Add Users</h4>
                            </div>
                            <div class="card-body">
                                <form action='f.php' method="post"  >
                                    <div class="form-body">
                                       
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" name="a" class="form-control" placeholder="username">
                                                   </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">nom</label>
                                                    <input type="text" name="b" class="form-control form-control-danger" placeholder="nom">
                                                    </div>
                                            </div>
                                         
                                        </div>
                                       
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">prenom </label>
                                                    <input type="text" name="c" class="form-control" placeholder="prenom">
                                                   </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Email</label>
                                                    <input type="text" name="d" class="form-control form-control-danger" placeholder="example@gmail.com">
                                                    </div>
                                            </div>
                                          
                                        </div>
                                       
										 <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Password</label>
                                                    <input type="text" name="e" class="form-control form-control-danger" placeholder="password">
                                                    </div>
                                                </div>
                                        
                                       
                                     
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">role</label>
                                                    <input type="text" name="f" class="form-control form-control-danger" placeholder="role">
                                                    </div>
                                                </div>
                                            </div>
                                      
                                      
                                           
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="Save"> 
                                        <a href="add_users.php" class="btn btn-inverse">Cancel</a>
                                    </div>
                                </form>
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
    
    
    
    <script src="js/sidebarmenu.js"></script>
   
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    
    <script src="js/custom.min.js"></script>

</body>

</html>