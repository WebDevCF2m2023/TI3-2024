<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Ti3</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-resizable-columns@0.2.3/dist/jquery.resizableColumns.min.css">
    


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<div class="container">
    <div class="text-center">
        <h1 class=" display-5">Admin Homepage</h1>
      </div>
</div>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php require "include/nav.html.php"; ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="./" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Recherche">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/seb.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">seb vous à envoyer un message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/seb.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">seb vous à envoyer un message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/seb.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">seb vous à envoyer un message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">voir tout</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notifications</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile update</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">nouvelle utulisateur</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changer</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center"> notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/seb.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">struys sebastien</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Mon Profile</a>
                            <a href="#" class="dropdown-item">Parametre</a>
                            <a href="?disconnect" class="dropdown-item">deconnecter</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        
                    </div>
                    <h2 class="mb-4">Administration de nos datas</h2>

        <?php if(isset($_GET['co'])): ?>
            <h2 id="title" class=" mb-3 display-4 text-success fst-italic animate__animated animate__zoomIn  ">Bienvenue <?=$_SESSION['login']?></h2>
        <?php endif ?>
        <?php if(isset($_GET['zut'])): ?>
            <h2 id="insert" class="mb-3 display-5 text-info animate__animated animate__zoomIn animate__delay-1s  ">Insertion réussie</h2>
        <?php endif ?>
        <?php if(isset($_GET['up'])): ?>
          <h2 id="up" class="mb-3 display-5 text-info animate__animated animate__zoomIn animate__delay-1s ">Update réussie</h2>
        <?php endif ?>
        <?php if(isset($_GET['ok'])): ?>
          <h2 id="del" class="mb-3 display-5 text-info animate__animated animate__zoomIn animate__delay-1s ">Delete réussie</h2>
        <?php endif ?>
        <?php  if(isset($message)): ?>
                <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        
        <?php else: ?>
            
                    <div class="table-responsive{-sm|-md|-lg|-xl|-xxl}">
                        <table  id="table"
                        class="table text-start align-middle table-bordered table-hover mb-0"
                        data-toggle="table"
                        data-click-to-select="true"
                        data-pagination="true"
                        data-page-list="[2,4,6,10]"
                        data-show-pagination-switch="true"
                        data-minimum-count-columns="2"
                        data-show-columns="true"
                        data-show-columns-toggle-all="true"
                        data-key-events="true"
                        data-search="true"
                        data-show-refresh=""
                        data-show-toggle="true"
                        data-resizable="true"
                        data-show-print="true"
                        data-show-copy-rows="true"
                        data-resizable="true" class="table text-start align-middle table-bordered table-hover mb-0">



                        <div class="mb-2">
                        <a href="?insert">
                        <button type="button" class="btn btn-success">
                        <svg style="position:relative; top: -1px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-fill-add me-1" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1"></path>
                        <path d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7m6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.55 4.55 0 0 1 .23-2.002m-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-1.3-1.905"></path>
                        </svg>
                        Ajouter Location
                    </button>
                </a>
            </div>



                            <thead>
                                <tr>
                                  <th data-checkbox="true" data-field="state" data-print-ignore="true"></th>
                                  <th data-sortable="true" class="text-success" data-print-ignore="true">ID</th>
                                  <th class="text-success">Nom</th>
                                  <th class="text-success">Adresse</th>
                                  <th class="text-success">Numéro</th>
                                  <th data-sortable="true" class="text-success">Ville</th>
                                  <th data-sortable="true" class="text-success">Code postal</th>
                                  <th class="text-success">Latitude</th>
                                  <th class="text-success">Longitude</th>
                                  <th class="text-success" data-switchable="false" data-print-ignore="true">Modifier</th>
                                  <th class="text-success" data-switchable="false" data-print-ignore="true">Supprimer</th>
                                </tr>
                              </thead>
                       <tbody>
                             </tr>
                              <?php foreach($ourDatas as $item): ?>
                              <td></td>
                              <td><?=$item['id']?></td>
                              <td class="text-white"><?=$item['nom']?></td>
                              <td class="text-white"><?=$item['adresse']?></td>
                              <td class="text-white"><?=$item['numero']?></td>
                              <td class="text-white"><?=$item['ville']?></td>
                              <td class="text-white"><?=$item['codepostal']?></td>
                              <td class="text-white"><?=$item['latitude']?></td>
                              <td class="text-white"><?=$item['longitude']?></td>
                              <td class="text-white"><a href="?update=<?=$item['id']?>"><img src="./img/up.png" width="32" height="32" alt="update" /></a></td>
                              <td class="text-white"><a href="?delete=<?=$item['id']?>"><img src="./img/poubelle.png" width="32" height="32" alt="delete" /></a></td>
                            </tr>
                              <?php endforeach; ?>
                            </table>
                              <?php endif; ?>
                       </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                        <h6 class="mb-0">Carte</h6>
                        <div id="map" class="h-100"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Stations Cambio</h6>
                                <a href="#"></a>
                            </div>
                            <div id="liste" style="max-height: 250px;overflow-y: scroll;"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calendrier</h6>
                                <a href="#"></a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Struys sebastien</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="#">Struys sebastien</a>
                            <br>Distributed By: <a href="#" target="_blank">Struys sebastien</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- JavaScript Libraries -->
    <!--leaflet-->  
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

    <!--leaflet-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.28.0/tableExport.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/bootstrap-table-locale-all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/extensions/export/bootstrap-table-export.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/bootstrap-table.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/extensions/key-events/bootstrap-table-key-events.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/extensions/print/bootstrap-table-print.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-resizable-columns@0.2.3/dist/jquery.resizableColumns.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/extensions/resizable/bootstrap-table-resizable.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.5/dist/extensions/copy-rows/bootstrap-table-copy-rows.min.js"></script>
       

   


    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/map.js"></script>

    <script>
  $(function() {
    $('#table').bootstrapTable()
  })
</script>

<script>
  var $table = $('#table')

  $(function() {
    $table.bootstrapTable({
      printStyles: ['https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/all.min.css']
    })
  })
</script>





   <!-- <script>
        const title = document.querySelector('#title');
        title.classList.add('animate__animated', 'animate__backInDown', "animate__delay-2s");

        title.addEventListener('animationend', () => {
            title.classList.replace('animate__backInDown', 'animate__backOutRight')
        });

        const insert = document.querySelector('#insert');
        insert.classList.add('animate__animated', 'animate__backInDown', "animate__delay-2s");

        insert.addEventListener('animationend', () => {
            insert.classList.replace('animate__backInDown', 'animate__backOutRight')
        });

        const up = document.querySelector('#up');
        up.classList.add('animate__animated', 'animate__backInDown', "animate__delay-2s");

        up.addEventListener('animationend', () => {
            up.classList.replace('animate__backInDown', 'animate__backOutRight')
        });

        const del = document.querySelector('#del');
        del.classList.add('animate__animated', 'animate__backInDown', "animate__delay-2s");

        del.addEventListener('animationend', () => {
            del.classList.replace('animate__backInDown', 'animate__backOutRight')
        });
    </script>-->
</body>

</html>

