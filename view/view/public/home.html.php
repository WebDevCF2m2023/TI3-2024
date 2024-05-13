<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>crud dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		  <!--google fonts -->
	
	      <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	    <!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    </head>
  <body>
      <div class="wrapper">
        <h2 class="ml-lg-2 text-center ">Gestion des Bibliothèques</h2>
		      <!--------page-content----------------> 
		            
                        <div class="xp-profilebar text-center">
                          
							              <nav class="navbar ">
                              
                                <ul class="nav navbar-nav flex-row ml-auto">  
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
								                            <img src="img/charly.jpg" style="width:40px"; border-radius:50%;"/>
								                                <span class="xp-user-live"></span></a>
								                                  <ul class="dropdown-menu small-menu">
                                                    <li><a href="#"><span class="material-icons">person_outline</span>Profile</a></li>
                                                    <li><a href="#"><span class="material-icons">settings</span>Settings</a></li>
                                                    <li><a href="?disconnect"><span class="material-icons">logout</span>Logout</a>
                                                    </li>
                                                  </ul>
                                    </li>
                                  </ul>
                              </nav>
                              <div id="content ml-auto">
                                <div class="col-12 lg">
                                  <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./">Accueil Admin</a></li>
                                    <li class="breadcrumb-item"><a href="?insert">Ajouter une Bibliothèque</a></li>
                                    <li class="breadcrumb-item"><a href="?disconnect">Déconnexion</a></li>
              
                                </ol>         
                            </div>
                          </div>
                      </div>
                    <!-- End XP Col -->
                  </div> 
                <!-- End XP Row -->
                <div class="col-md-3">
                    <div class="xp-searchbar">
                      <form>
                          <div class="input-group">
                            <input type="search" class="form-control"placeholder="Search">
                              <div class="input-group-append">
                              <button class="btn" type="submit"id="button-addon2">GO</button>
                              </div>
                           </div>
                      </form>
                  </div>
              </div>
            </div>
		        
			
		  
		   <!--------main-content------------->
		                                    
    <table class="table table-striped table-hover table-xl" id="table" data-toggle="table" data-height="460" data-pagination="true">
            <thead>
                  <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>adresse</th>
                    <th>codepostal</th>
                    <th>latitude</th>
                    <th>longitude</th>
                    <th>update</th>
                    <th>delete</th>
                    
                  </tr>
              </thead>

      <tbody>
      
                                  <tr>
              <td>1</td>
              <td>Bibliothèque des Riches-Claire</td>
              <td>Rue des Riches Claires 24</td>
              <td>1000</td>
              <td>50.846977</td>
              <td>4.346389</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
          </tr>
                                  <tr>
              <td>2</td>
              <td>Bibliothèque du Mutsaard</td>
              <td>Rue Gustave Demanet 82</td>
              <td>1020</td>
              <td>50.899607</td>
              <td>4.358849</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

          </tr>
                                  <tr>
              <td>3</td>
              <td>Bibliothèque filiale Adolphe Max</td>
              <td>Rue des Eburons 11</td>
              <td>1000</td>
              <td>50.848708</td>
              <td>4.378354</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

          </tr>
                                  <tr>
              <td>4</td>
              <td>Bibliothèque filiale de Haren</td>
              <td>Rue de la Paroisse 34</td>
              <td>1130</td>
              <td>50.892543</td>
              <td>4.419942</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

          </tr>
                                  <tr>
              <td>5</td>
              <td>Bibliothèque de Laeken</td>
              <td>Boulevard Emile Bockstael 246</td>
              <td>1020</td>
              <td>50.876342</td>
              <td>4.348200</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

          </tr>
                                  <tr>
              <td>6</td>
              <td>Bibliothèque Artistique - Académie des Beaux Arts</td>
              <td>Rue du Midi 144</td>
              <td>1000</td>
              <td>50.843661</td>
              <td>4.347247</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
          </tr>
                                  <tr>
              <td>7</td>
              <td>Bibliothèque filiale Charles Janssen</td>
              <td>Boulevard Emile Jacqmain 62</td>
              <td>1000</td>
              <td>50.853557</td>
              <td>4.353895</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

          </tr>
                                  <tr>
              <td>8</td>
              <td>Centre de Littérature de Jeunesse de Bruxelles</td>
              <td>Rue du Frontispice 8</td>
              <td>1000</td>
              <td>50.858309</td>
              <td>4.351636</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

          </tr>
                                  <tr>
              <td>9</td>
              <td>Bibliothèque pédagogique et d’animation Elisabeth Carter</td>
              <td>Boulevard Maurice Lemonnier 132</td>
              <td>1000</td>
              <td>50.842464</td>
              <td>4.343505</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

          </tr>
                                  <tr>
              <td>10</td>
              <td>Bibliothèque des Métiers d’Art et des Techniques (Bima)</td>
              <td>Boulevard de l''Abattoir 50</td>
              <td>1000</td>
              <td>50.847262</td>
              <td>4.337755</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
          </tr>
                                  <tr>
              <td>11</td>
              <td>Bibliothèque Fernand Brunfaut</td>
              <td>Cité Modèle - Bloc 3</td>
              <td>1020</td>
              <td>50.895549</td>
              <td>4.323828</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

          </tr>
                                  <tr>
              <td>12</td>
              <td>Bibliothèque Espace El Baroudi</td>
              <td>Rue du Poinçon 17</td>
              <td>1000</td>
              <td>50.843772</td>
              <td>4.348877</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

          </tr>
                                  <tr>
              <td>13</td>
              <td>Bibliothèque filiale Brand Whitlock</td>
              <td>Rue Sainte Anne 10</td>
              <td>1000</td>
              <td>50.841482</td>
              <td>4.356081</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

          </tr>
                                  <tr>
              <td>14</td>
              <td>Bibliothèque de Neder-Over-Heembeek</td>
              <td>Rue François Vekemans 63-65</td>
              <td>1120</td>
              <td>50.895664</td>
              <td>4.389768</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

          </tr>
                                  <tr>
              <td>15</td>
              <td>Bibliothèque Bruegel</td>
              <td>Rue Haute 425</td>
              <td>1000</td>
              <td>50.836512</td>
              <td>4.348094</td>
              <td> <a href="#editEmployeeModal" class="edit" data-toggle="modal">
                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></td>
              <td><a href="#deleteEmployeeModal" class="delete-danger" data-toggle="modal">
              <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>

          </tr>
                              </tbody>
  </table>
           
          </td>
        </tr>
      </tbody>
    </table>
    <nav aria-label="tabindex">
      <ul class="pagination pagination-md">
        <li class="pagination disabled">
          <a class="pagination" href="1" tabindex="-1">1</a>
        </li>
        <li class="pagination"><a class="page-link" href="6">2</a></li>
        <li class="pagination"><a class="page-link" href="11">3</a></li>
      </ul>
    </nav>
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
          <button type="button" class="close" data-dismiss="modal" 
		  aria-hidden="true">&times;</button>
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
         
      </form>
    </div>
	</div>
  </div>
							 <!---footer---->
		
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


