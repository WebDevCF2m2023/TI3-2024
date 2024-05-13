<!DOCTYPE html>
<html lang="fr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/ample-admin-lite/"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/bootstrap-table.min.css"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="plugins/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link
      href="plugins/bower_components/chartist/dist/chartist.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css"
    />
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet" />
  

    <title><a href="./">Accueil Admin</a></title>
</head>
<body>
    <h1><a href="?insert">Ajouter une data</a></h1>
    <div class="content">
        <h2><a href="?disconnect">Déconnexion</a></h2>
        <?php if(isset($_GET['zut'])): ?>

            <h2>Insertion réussie</h2>
            
        <?php endif ?>

        <?php  if(isset($message)): ?>
                <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        
        <?php else: ?>
            
<div class="wrapper">


        <div class="body-overlay"></div>
		
		<!-------------------------sidebar------------>
		     <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/BSI.jpg"style="width:40px; border-radius:50%;" class="img-fluid"/><span>WebDev design</span></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="#" class="dashboard"><i class="material-icons">dashboard</i>
					<span>Dashboard</span></a>
                </li>
		

                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">aspect_ratio</i>Layouts</a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">apps</i><span>widgets</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
				
				 <li class="dropdown">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">equalizer</i>
				
					
					<span>chart</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
				  <li class="dropdown">
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">extension</i><span>ui element</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
				
				<li class="dropdown">
                    <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">border_color</i><span>forms</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
               
			   
			   
			   <li class="dropdown">
                    <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">grid_on</i><span>tables</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu6">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
               
			   
			     <li class="dropdown">
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" 
					class="dropdown-toggle">
					<i class="material-icons">content_copy</i><span>Pages</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
               
               <li class="">
                    <a href="#"><i class="material-icons">date_range</i><span>copy</span></a>
                </li>
				
				 <li  class="">
                    <a href="#"><i class="material-icons">library_books</i><span>Calender
					</span></a>
                </li>
            </ul>
        </nav>
		<!--------page-content---------------->
		<div id="content">
		   <!--top--navbar----design--------->
		   <div class="top-navbar">
		      <div class="xp-topbar">

                <!-- Start XP Row -->
                <div class="row"> 
                    <!-- Start XP Col -->
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                               <span class="material-icons text-white">signal_cellular_alt
							   </span>
                         </div>
                    </div> 
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form>
                                <div class="input-group">
                                  <input type="search" class="form-control" 
								  placeholder="Search">
                                  <div class="input-group-append">
                                    <button class="btn" type="submit" 
									id="button-addon2">GO</button>
                                  </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End XP Col -->

                    <!-- Start XP Col -->
                    <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                        <div class="xp-profilebar text-right">
							 <nav class="navbar p-0">
                        <ul class="nav navbar-nav flex-row ml-auto">   
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   <span class="material-icons">notifications</span>
								   <span class="notification">4</span>
                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">You have 5 new messages</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Mike</a>
                                    </li>
                                    <li>
                                        <a href="#">Wish Mary on her birthday!</a>
                                    </li>
                                    <li>
                                        <a href="#">5 warnings in Server Console</a>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
								<span class="material-icons">question_answer</span>

								</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown">
								<img src="img/charly.jpg" style="width:60px; border-radius:50%;"/>
								<span class="xp-user-live"></span>
								</a>
								<ul class="dropdown-menu small-menu">
                                    <li>
                                        <a href="#">
										  <span class="material-icons">
person_outline
</span>Profile

										</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="material-icons">
settings
</span>Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="material-icons">
logout</span>Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    
               
            </nav>
							
                        </div>
                    </div>
                    <!-- End XP Col -->

                </div> 
                <!-- End XP Row -->

            </div>
		     <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">Bibliothèques</h4>  
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                  </ol>                
            </div>
			
		   </div>
		   <!--------main-content------------->
		                                        <div class="main-content">
			                                            <div class="row">
				                                            <div class="col-md-12">
				                                                <div class="table-wrapper">
                                                                        <div class="table-title">
                                                                             <div class="row">
                                                        <div class="col-sm-6 p-0 d-flex justify-content-lg-center justify-content-center">
                                                                <h2 class="ml-lg-2">Gestion des Bibliothèques</h2></div>
                                                            </div></div>
                                                        <table class="table table-striped text-center table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th>
                                                               <span class="custom-checkbox">
								                                  <input type="checkbox" id="selectAll">
								                                      <label for="selectAll"></label>
							                                        </span>
                                                                       <th>nom</th>
                                                                      <th>adresse</th>
                                                                        <th>codepostal</th>
                                                                    <th>latitude</th>
                                                                    <th>longitude</th>
                                                                    <th>Modifier</th>
                                                                    <th>supprimer</th>
                                                                    </tr>
                                                                    <?php foreach($NosDatas as $item): ?>
                                                                    <tr>
                                                                    <td><?=$item['id']?></td>
                                                                    <td><?=$item['nom']?></td>
                                                                    <td><?=$item['adresse']?></td>
                                                                    <td><?=$item['codepostal']?></td>
                                                                    <td><?=$item['latitude']?></td>
                                                                    <td><?=$item['longitude']?></td>
                                                                    <td><a href="?update=<?=$item['id']?>"><i class="material-icons">&#xE147;</i> <span>Ajouter une Bibliothèque</span></a></td>
                                                                    <td><a href="?delete=<?=$item['id']?>"><i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a></td>
                                                                    <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
                                                                     <!--  <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
		                                                            <i class="material-icons">&#xE147;</i> <span>Ajouter une Bibliothèque</span></a>
                                                                    <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
		                                                            <i class="material-icons">&#xE15C;</i> <span>Supprimer</span></a>-->
                                                                </div>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                            </table>
                                                        <?php endif; ?>
                                                         </td>
                                                            </tr>
                                                    </tbody>
                                                </table>
                                                <div class="clearfix">
                                                 <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                <ul class="pagination">
                                <li class="page-item disabled"><a href="#">Previous</a></li>
                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                            </ul>
                        </div>
                </div>
            </div>
<!-- Edit Modal HTML -->
           <div id="addEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <form>
                     <div class="modal-header">
                                 <h4 class="modal-title">Ajouter une Bibliothèques</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                     <div class="modal-body">
                        <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" required>
                     </div>
                    <div class="form-group">
                    <label>adresse</label>
                    <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label>code postal</label>
                    <input type="text"classe="form-control" required>
                    </div>
                    <div class="form-group">
                    <label>latitude</label>
                    <input type="number" class="form-control" required>
                    </div>
                    <div class="form-group">
                    <label>longitude</label>
                    <input type="number" class="form-control" required>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                    </div>
                    </form>
                    </div>
                    </div>
                    </div>
<!-- Edit Modal HTML -->
                        <div id="editEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <form>
                        <div class="modal-header">
                        <h4 class="modal-title">Edit Bibliothèques</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                        <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>adresse</label>
                        <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>code postal</label>
                        <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                        <label>Latitude</label>
                        <input type="number" class="form-control" required>
                         </div>
                        <div class="form-group">
                        <label>Longitude</label>
                            <input type="number" class="form-control" required>
                        </div>
                        </div>
                        <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                    </form>
                    </div>
                    </div>
                    </div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h4 class="modal-title">Delete Bibliothèques</h4>
          <button type="button" class="close" data-dismiss="modal" 
		  aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete these Records?</p>
          <p class="text-warning"><small>This action cannot be undone.</small></p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-danger" value="Delete">
        </div>
      </form>
    </div>
	</div>
  </div>
			  </div>
			 <!---footer---->
		</div>
		
		<footer class="footer">
			    <div class="container-fluid">
				  <div class="footer-in">
                    <p class="mb-0">&copy 2024 Web Dev design - All Rights Reserved.</p>
                </div>
				</div>
			 </footer>
</div>
</div>
<!----------html code compleate----------->
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
   <script src="./js/script.js"></script>  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
		
</script>
  
  



  </body>
  
  </html>
