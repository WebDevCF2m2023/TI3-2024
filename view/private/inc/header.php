<hr class="border border-secondary border-1 opacity-25">
<div class="text-center">
    <p class="h1 animate__animated animate__zoomInUp">Bienvenue Dans Ma Nouvelle Expérience</p>
</div>
<nav class="navbar">
<div class="container-fluid">

    <div class="collapse-sm navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row justify-content-evenly">
        <li class="nav-item">
          <?php
        if (!isset($_SESSION["monID"]) || $_SESSION["monID"] != session_id()) {
          ?>
          <a class="nav-link active animate__animated animate__delay-1s animate__fadeIn" aria-current="page" href="?page=home">Home</a>
          <?php
        
            }else if(isset($_GET["page"]) && $_GET["page"] !== "adminHome") {
            
          ?>
          <a class="nav-link active animate__animated animate__delay-1s animate__fadeIn" aria-current="page" href="?page=home">Home</a>
        <?php    
        }else {
              ?>
          <a class="nav-link disabled animate__animated animate__delay-1s animate__fadeIn" aria-current="page" href="?page=adminHome">Home</a>
              <?php
            }
          ?>
        </li>
        <li class="nav-item">
          <a class="nav-link animate__animated animate__delay-2s animate__fadeIn" href="?page=showmap">Carte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link animate__animated animate__delay-3s animate__fadeIn" href="?page=create">Ajouter un Lieu</a>
        </li>

        <li class="nav-item">
        <?php
            if (isset($_SESSION["monID"])) {
              ?>
          <a class="nav-link animate__animated animate__delay-2s animate__fadeIn" href="?logout" tabindex="-1" aria-disabled="true">Déconnexion</a>
          <?php
            }else if (!isset($_SESSION["monID"]) && isset($_GET["login"])) {
              ?>
              <a class="nav-link disabled animate__animated animate__delay-2s animate__fadeIn" href="?login" tabindex="-1" aria-disabled="true">Connexion</a>
              <?php
            
            ?>
              <?php
            }else  {
          ?>
          <a class="nav-link animate__animated animate__delay-2s animate__fadeIn" href="?login" tabindex="-1" aria-disabled="true">Connexion</a>
          <?php
          }
          ?>
        </li>
      </ul>
      <!--
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
-->
    </div>
  </div>
</nav>

<hr class="border border-secondary border-1 opacity-25">