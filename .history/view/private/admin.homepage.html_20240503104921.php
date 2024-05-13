<!DOCTYPE html>
<html lang="fr">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="alternate" hreflang="cs" href="https://www.phpcrudgenerator.com/admin/home?lang=cs">
    <link rel="alternate" hreflang="de" href="https://www.phpcrudgenerator.com/admin/home?lang=de">
    <link rel="alternate" hreflang="en" href="https://www.phpcrudgenerator.com/admin/home?lang=en">
    <link rel="alternate" hreflang="es" href="https://www.phpcrudgenerator.com/admin/home?lang=es">
    <link rel="alternate" hreflang="fr" href="https://www.phpcrudgenerator.com/admin/home?lang=fr">
    <link rel="alternate" hreflang="it" href="https://www.phpcrudgenerator.com/admin/home?lang=it">
    <link rel="alternate" hreflang="pt-br" href="https://www.phpcrudgenerator.com/admin/home?lang=pt-br">
    <meta name="description" content="PHP CRUD GENERATOR - Bootstrap admin dashboard with CRUD functionnalities. This admin panel is built with the MySQL Sakila Database for demo purposes">
    <link href="https://www.phpcrudgenerator.com/admin/home?lang=en" rel="canonical">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/pace-theme-minimal.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/themes/default/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/themes/default/admin.min.css" type="text/css">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/OverlayScrollbars.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/OverlayScrollbar-os-theme-round-dark.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/footable.bootstrap.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/pickadate/lib/compressed/themes/classic.css" type="text/css" media="screen">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/pickadate/lib/compressed/themes/classic.date.css" type="text/css" media="screen">
    <title>Admin Homepage</title>
</head>
<body>
    <h1>Admin Homepage</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil Admin</a></li>
            <li><a href="?insert">Ajouter une data</a></li>
            <li><a href="?disconnect">Déconnexion</a>
        </ul>
    </nav>
    <div class="content">
        <h2>Administration de nos datas</h2>
        <?php if(isset($_GET['zut'])): ?>

            <h2>Insertion réussie</h2>
            
        <?php endif ?>

        <?php  if(isset($message)): ?>
                <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        
        <?php else: ?>
            <!-- modèle de tableau à remplir avec le foreach -->
        <table>
            <tr>
                <th>id</th>
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
                <td><a href="?update=<?=$item['id']?>"><img src="img/update.png" width="32" height="32" alt="update" /></a></td>
                <td><a href="?delete=<?=$item['id']?>"><img src="img/delete.png" width="32" height="32" alt="delete" /></a></td>
            </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
    ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP CRUD GENERATOR Admin dashboard - PHP CRUD - Admin Panel Generator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="https://www.phpcrudgenerator.com/admin/customer">
    <meta name="description" content="PHP CRUD Admin Panel - Customer List - This Bootstrap 5 admin dashboard has been built from the Sakila demo database using PHP CRUD GENERATOR.">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/pace-theme-minimal.min.css" type="text/css" media="screen">
<link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/themes/default/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/themes/default/admin.min.css" type="text/css">
<link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/OverlayScrollbars.min.css" type="text/css" media="screen">
<link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/OverlayScrollbar-os-theme-round-dark.min.css" type="text/css" media="screen">
<link rel="stylesheet" href="https://www.phpcrudgenerator.com/admin/assets/stylesheets/footable.bootstrap.min.css" type="text/css" media="screen">

<link rel="stylesheet" href="https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/pickadate/lib/compressed/themes/classic.css" type="text/css" media="screen">
<link rel="stylesheet" href="https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/pickadate/lib/compressed/themes/classic.date.css" type="text/css" media="screen">
</head>

<body>
    <!--LSHIDE-->
<nav id="website-navbar" class="navbar navbar-light bg-white navbar-expand-md fixed-top shadow-sm" aria-label="Main navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/assets/images/phpcg.svg" width="56" height="36" alt="PHPCG">
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">

            <ul class="nav navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.phpcrudgenerator.com/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/admin/home?lang=en">Demo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.phpcrudgenerator.com/documentation/index">Documentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="https://www.phpcrudgenerator.com/tutorials"><span class="d-md-none d-lg-inline mx-1"> CRUD </span>Tutorials<span class="d-md-none d-lg-inline"> / Q&A</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.phpcrudgenerator.com/help-center">Help center</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.phpcrudgenerator.com/about">About</a>
                </li>

                    <!-- languages -->
                    <li class="nav-item">
                        <div id="i18n-menu" class="dropdown">

                            <button class="btn btn-link dropdown-toggle me-1" id="i18n-selected-language" type=" button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://www.phpcrudgenerator.com/assets/images/flags/en.svg" width="24" height="18" alt="en">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" data-ignore="true" href="https://www.phpcrudgenerator.com/cs/"><img src="https://www.phpcrudgenerator.com/assets/images/flags/cs.svg" id="i18n-cs-flag" class="me-2" width="24" height="18" alt="Czech">Czech</a></li>
                                <li><a class="dropdown-item" data-ignore="true" href="https://www.phpcrudgenerator.com"><img src="https://www.phpcrudgenerator.com/assets/images/flags/en.svg" id="i18n-en-flag" class="me-2" width="24" height="18" alt="English">English</a></li>
                                <li><a class="dropdown-item" data-ignore="true" href="https://www.phpcrudgenerator.com/fr/"><img src="https://www.phpcrudgenerator.com/assets/images/flags/fr.svg" id="i18n-fr-flag" class="me-2" width="24" height="18" alt="French">French</a></li>
                                <li><a class="dropdown-item" data-ignore="true" href="https://www.phpcrudgenerator.com/de/"><img src="https://www.phpcrudgenerator.com/assets/images/flags/de.svg" id="i18n-de-flag" class="me-2" width="24" height="18" alt="German">German</a></li>
                                <li><a class="dropdown-item" data-ignore="true" href="https://www.phpcrudgenerator.com/it/"><img src="https://www.phpcrudgenerator.com/assets/images/flags/it.svg" id="i18n-it-flag" class="me-2" width="24" height="18" alt="Italian">Italian</a></li>
                                <li><a class="dropdown-item" data-ignore="true" href="https://www.phpcrudgenerator.com/pt-br/"><img src="https://www.phpcrudgenerator.com/assets/images/flags/pt-br.svg" id="i18n-pt-br-flag" class="me-2" width="24" height="18" alt="Portuguese / Brazilian">Portuguese / Brazilian</a></li>
                                <li><a class="dropdown-item" data-ignore="true" href="https://www.phpcrudgenerator.com/es/"><img src="https://www.phpcrudgenerator.com/assets/images/flags/es.svg" id="i18n-es-flag" class="me-2" width="24" height="18" alt="Spanish">Spanish</a></li>
                            </ul>
                        </div>
                    </li>

                <!-- buy -->
                <li class="nav-item">
                    <a class="btn btn-danger btn-buy px-sm-2 px-md-3" href="https://1.envato.market/xabod" title="Buy now">Buy now<span class="ms-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20.25" height="18">
                                <path fill="currentColor" d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                            </svg>
                        </span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--/LSHIDE-->
    <div class="d-flex flex-nowrap">
        <!-- Main sidebar -->
<nav id="sidebar-main" role="navigation" aria-label="Secondary navigation" class="sidebar flex-column flex-nowrap justify-content-start navbar bg-dark collapse-inactive-categories">
    <button type="button" class="sidebar-toggler btn-close" aria-label="Close"></button>
    <a href="https://www.phpcrudgenerator.com/admin/home?lang=en" class="my-3 d-block w-100 text-center" title="PHP CRUD GENERATOR"><img src="https://www.phpcrudgenerator.com/admin/assets/images/logo-height-100-white.png" alt="PHP CRUD GENERATOR"></a>
                <div id="sidebarFilters" class="sidebar-category">
                    <div class="category-title nav-link">
            <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#sidebarFiltersNav" role="button" aria-expanded="true" aria-controls="sidebarFiltersNav">Filter the list</a>
        </div>
                                                            <div class="category-content collapse show" id="sidebarFiltersNav">
                            
            <ul class="navbar-nav flex-column">
                                                <li>
                                                                <div class="px-3">
<form id="filters-list" action="/admin/customer" method="POST" novalidate class="auto-enable-filters bs5-form"><div><input name="filters-list-token" type="hidden" value="12539865866634a068f374b7.74663525" ><input name="filters-list" type="hidden" value="true" ></div><fieldset><div class="row gx-0 mb-3"><label for="customer_filter_last_name" class="form-label">Last Name</label><select id="customer_filter_last_name" name="customer_filter_last_name" class="form-select-sm form-select" data-slimselect="true" data-allow-deselect="true" data-allow-deselect-option="true" data-placeholder="Select ..."><option value=""  selected="selected" label="Select" data-placeholder="true"></option><option value="ABNEY" >ABNEY</option><option value="ADAM" >ADAM</option><option value="ADAMS" >ADAMS</option><option value="ALEXANDER" >ALEXANDER</option><option value="ALLARD" >ALLARD</option><option value="ALLEN" >ALLEN</option><option value="ALVAREZ" >ALVAREZ</option><option value="ANDERSON" >ANDERSON</option><option value="ANDREW" >ANDREW</option><option value="ANDREWS" >ANDREWS</option><option value="AQUINO" >AQUINO</option><option value="ARCE" >ARCE</option><option value="ARCHULETA" >ARCHULETA</option><option value="ARMSTRONG" >ARMSTRONG</option><option value="ARNOLD" >ARNOLD</option><option value="ARSENAULT" >ARSENAULT</option><option value="ARTIS" >ARTIS</option><option value="ASHCRAFT" >ASHCRAFT</option><option value="ASHER" >ASHER</option><option value="AUSTIN" >AUSTIN</option><option value="BAILEY" >BAILEY</option><option value="BAKER" >BAKER</option><option value="BALES" >BALES</option><option value="BANDA" >BANDA</option><option value="BANKS" >BANKS</option><option value="BARBEE" >BARBEE</option><option value="BARCLAY" >BARCLAY</option><option value="BARFIELD" >BARFIELD</option><option value="BARKLEY" >BARKLEY</option><option value="BARNES" >BARNES</option><option value="BARNETT" >BARNETT</option><option value="BARRETT" >BARRETT</option><option value="BATES" >BATES</option><option value="BAUGH" >BAUGH</option><option value="BAUGHMAN" >BAUGHMAN</option><option value="BELL" >BELL</option><option value="BENNER" >BENNER</option><option value="BENNETT" >BENNETT</option><option value="BERRY" >BERRY</option><option value="BESS" >BESS</option><option value="BETANCOURT" >BETANCOURT</option><option value="BILLINGSLEY" >BILLINGSLEY</option><option value="BISHOP" >BISHOP</option><option value="BLACK" >BLACK</option><option value="BLAKELY" >BLAKELY</option><option value="BOLIN" >BOLIN</option><option value="BONE" >BONE</option><option value="BOSTIC" >BOSTIC</option><option value="BOUDREAU" >BOUDREAU</option><option value="BOURQUE" >BOURQUE</option><option value="BOWENS" >BOWENS</option><option value="BOWMAN" >BOWMAN</option><option value="BOX" >BOX</option><option value="BOYD" >BOYD</option><option value="BRADLEY" >BRADLEY</option><option value="BREAUX" >BREAUX</option><option value="BREWER" >BREWER</option><option value="BRINSON" >BRINSON</option><option value="BROOKS" >BROOKS</option><option value="BROTHERS" >BROTHERS</option><option value="BROWN" >BROWN</option><option value="BROWNLEE" >BROWNLEE</option><option value="BRYANT" >BRYANT</option><option value="BUFORD" >BUFORD</option><option value="BULL" >BULL</option><option value="BUNN" >BUNN</option><option value="BURK" >BURK</option><option value="BURKE" >BURKE</option><option value="BURLESON" >BURLESON</option><option value="BURNS" >BURNS</option><option value="BURTON" >BURTON</option><option value="BUSTAMANTE" >BUSTAMANTE</option><option value="BUTLER" >BUTLER</option><option value="BUTTERFIELD" >BUTTERFIELD</option><option value="BYRD" >BYRD</option><option value="CABRAL" >CABRAL</option><option value="CALDWELL" >CALDWELL</option><option value="CAMPBELL" >CAMPBELL</option><option value="CARBONE" >CARBONE</option><option value="CARLSON" >CARLSON</option><option value="CARPENTER" >CARPENTER</option><option value="CARR" >CARR</option><option value="CARRANZA" >CARRANZA</option><option value="CARROLL" >CARROLL</option><option value="CARTER" >CARTER</option><option value="CARY" >CARY</option><option value="CASILLAS" >CASILLAS</option><option value="CASTILLO" >CASTILLO</option><option value="CASTRO" >CASTRO</option><option value="CAUSEY" >CAUSEY</option><option value="CHAMBERS" >CHAMBERS</option><option value="CHAPA" >CHAPA</option><option value="CHAPMAN" >CHAPMAN</option><option value="CHAVEZ" >CHAVEZ</option><option value="CHEATHAM" >CHEATHAM</option><option value="CHESTNUT" >CHESTNUT</option><option value="CHISHOLM" >CHISHOLM</option><option value="CHOATE" >CHOATE</option><option value="CHRISTENSON" >CHRISTENSON</option><option value="CHURCHILL" >CHURCHILL</option><option value="CINTRON" >CINTRON</option><option value="CLARK" >CLARK</option><option value="CLARY" >CLARY</option><option value="COLBY" >COLBY</option><option value="COLE" >COLE</option><option value="COLEMAN" >COLEMAN</option><option value="COLLAZO" >COLLAZO</option><option value="COLLINS" >COLLINS</option><option value="COOK" >COOK</option><option value="COOPER" >COOPER</option><option value="CORNISH" >CORNISH</option><option value="CORNWELL" >CORNWELL</option><option value="COUGHLIN" >COUGHLIN</option><option value="COX" >COX</option><option value="COY" >COY</option><option value="CRAIG" >CRAIG</option><option value="CRAWFORD" >CRAWFORD</option><option value="CRAWLEY" >CRAWLEY</option><option value="CROMWELL" >CROMWELL</option><option value="CROUSE" >CROUSE</option><option value="CRUZ" >CRUZ</option><option value="CULP" >CULP</option><option value="CULPEPPER" >CULPEPPER</option><option value="CUNNINGHAM" >CUNNINGHAM</option><option value="CURLEY" >CURLEY</option><option value="CURRIER" >CURRIER</option><option value="CURTIS" >CURTIS</option><option value="DANIELS" >DANIELS</option><option value="DAVIDSON" >DAVIDSON</option><option value="DAVIS" >DAVIS</option><option value="DAY" >DAY</option><option value="DEAN" >DEAN</option><option value="DELOACH" >DELOACH</option><option value="DELUCA" >DELUCA</option><option value="DELVALLE" >DELVALLE</option><option value="DEVORE" >DEVORE</option><option value="DIAZ" >DIAZ</option><option value="DIXON" >DIXON</option><option value="DOUGLAS" >DOUGLAS</option><option value="DOUGLASS" >DOUGLASS</option><option value="DOWD" >DOWD</option><option value="DUGGAN" >DUGGAN</option><option value="DUNCAN" >DUNCAN</option><option value="DUNN" >DUNN</option><option value="EAST" >EAST</option><option value="EASTER" >EASTER</option><option value="EBERT" >EBERT</option><option value="EDWARDS" >EDWARDS</option><option value="EGGLESTON" >EGGLESTON</option><option value="ELLINGTON" >ELLINGTON</option><option value="ELLIOTT" >ELLIOTT</option><option value="ELLIS" >ELLIS</option><option value="ELROD" >ELROD</option><option value="ELY" >ELY</option><option value="EMMONS" >EMMONS</option><option value="ESTEP" >ESTEP</option><option value="EVANS" >EVANS</option><option value="FARNSWORTH" >FARNSWORTH</option><option value="FENNELL" >FENNELL</option><option value="FERGUSON" >FERGUSON</option><option value="FERNANDEZ" >FERNANDEZ</option><option value="FIELDS" >FIELDS</option><option value="FISHER" >FISHER</option><option value="FLEMING" >FLEMING</option><option value="FLETCHER" >FLETCHER</option><option value="FLORES" >FLORES</option><option value="FORD" >FORD</option><option value="FORMAN" >FORMAN</option><option value="FORSYTHE" >FORSYTHE</option><option value="FORTIER" >FORTIER</option><option value="FORTNER" >FORTNER</option><option value="FOSTER" >FOSTER</option><option value="FOUST" >FOUST</option><option value="FOWLER" >FOWLER</option><option value="FOX" >FOX</option><option value="FRALEY" >FRALEY</option><option value="FRANCISCO" >FRANCISCO</option><option value="FRANKLIN" >FRANKLIN</option><option value="FRAZIER" >FRAZIER</option><option value="FREEMAN" >FREEMAN</option><option value="FULLER" >FULLER</option><option value="FULTZ" >FULTZ</option><option value="GAFFNEY" >GAFFNEY</option><option value="GAITHER" >GAITHER</option><option value="GAMEZ" >GAMEZ</option><option value="GANDY" >GANDY</option><option value="GANNON" >GANNON</option><option value="GARCIA" >GARCIA</option><option value="GARDINER" >GARDINER</option><option value="GARDNER" >GARDNER</option><option value="GARRETT" >GARRETT</option><option value="GARZA" >GARZA</option><option value="GAVIN" >GAVIN</option><option value="GEARY" >GEARY</option><option value="GEORGE" >GEORGE</option><option value="GIBSON" >GIBSON</option><option value="GILBERT" >GILBERT</option><option value="GILLETTE" >GILLETTE</option><option value="GILLILAND" >GILLILAND</option><option value="GILMAN" >GILMAN</option><option value="GOMEZ" >GOMEZ</option><option value="GONZALES" >GONZALES</option><option value="GONZALEZ" >GONZALEZ</option><option value="GOOCH" >GOOCH</option><option value="GOODEN" >GOODEN</option><option value="GORDON" >GORDON</option><option value="GRAF" >GRAF</option><option value="GRAHAM" >GRAHAM</option><option value="GRANT" >GRANT</option><option value="GRAVES" >GRAVES</option><option value="GRAY" >GRAY</option><option value="GRECO" >GRECO</option><option value="GREEN" >GREEN</option><option value="GREENE" >GREENE</option><option value="GREGORY" >GREGORY</option><option value="GRESHAM" >GRESHAM</option><option value="GREY" >GREY</option><option value="GRIFFIN" >GRIFFIN</option><option value="GRIGSBY" >GRIGSBY</option><option value="GRISSOM" >GRISSOM</option><option value="GRUBER" >GRUBER</option><option value="GUAJARDO" >GUAJARDO</option><option value="GUILLEN" >GUILLEN</option><option value="GUNDERSON" >GUNDERSON</option><option value="GUTIERREZ" >GUTIERREZ</option><option value="HALE" >HALE</option><option value="HALL" >HALL</option><option value="HAMILTON" >HAMILTON</option><option value="HANNON" >HANNON</option><option value="HANSEN" >HANSEN</option><option value="HANSON" >HANSON</option><option value="HARDER" >HARDER</option><option value="HARDISON" >HARDISON</option><option value="HARKINS" >HARKINS</option><option value="HARPER" >HARPER</option><option value="HARRIS" >HARRIS</option><option value="HARRISON" >HARRISON</option><option value="HART" >HART</option><option value="HARVEY" >HARVEY</option><option value="HAUSER" >HAUSER</option><option value="HAVENS" >HAVENS</option><option value="HAWKINS" >HAWKINS</option><option value="HAWKS" >HAWKS</option><option value="HAYES" >HAYES</option><option value="HEATON" >HEATON</option><option value="HENDERSON" >HENDERSON</option><option value="HENNING" >HENNING</option><option value="HENRY" >HENRY</option><option value="HERNANDEZ" >HERNANDEZ</option><option value="HERRERA" >HERRERA</option><option value="HERRMANN" >HERRMANN</option><option value="HERZOG" >HERZOG</option><option value="HIATT" >HIATT</option><option value="HICKS" >HICKS</option><option value="HIDALGO" >HIDALGO</option><option value="HILL" >HILL</option><option value="HITE" >HITE</option><option value="HOFFMAN" >HOFFMAN</option><option value="HOLLAND" >HOLLAND</option><option value="HOLM" >HOLM</option><option value="HOLMES" >HOLMES</option><option value="HOLT" >HOLT</option><option value="HOPKINS" >HOPKINS</option><option value="HORTON" >HORTON</option><option value="HOULE" >HOULE</option><option value="HOWARD" >HOWARD</option><option value="HOWELL" >HOWELL</option><option value="HOWLAND" >HOWLAND</option><option value="HUDSON" >HUDSON</option><option value="HUEY" >HUEY</option><option value="HUGHES" >HUGHES</option><option value="HUNT" >HUNT</option><option value="HUNTER" >HUNTER</option><option value="HURTADO" >HURTADO</option><option value="IRBY" >IRBY</option><option value="ISBELL" >ISBELL</option><option value="ISOM" >ISOM</option><option value="JACKSON" >JACKSON</option><option value="JACOBS" >JACOBS</option><option value="JAMES" >JAMES</option><option value="JENKINS" >JENKINS</option><option value="JENNINGS" >JENNINGS</option><option value="JENSEN" >JENSEN</option><option value="JIMENEZ" >JIMENEZ</option><option value="JOHNSON" >JOHNSON</option><option value="JOHNSTON" >JOHNSTON</option><option value="JONES" >JONES</option><option value="JORDAN" >JORDAN</option><option value="JORDON" >JORDON</option><option value="JOY" >JOY</option><option value="JUNG" >JUNG</option><option value="KAHN" >KAHN</option><option value="KELLEY" >KELLEY</option><option value="KELLY" >KELLY</option><option value="KENNEDY" >KENNEDY</option><option value="KENYON" >KENYON</option><option value="KIM" >KIM</option><option value="KINDER" >KINDER</option><option value="KING" >KING</option><option value="KNIGHT" >KNIGHT</option><option value="KNOTT" >KNOTT</option><option value="KOWALSKI" >KOWALSKI</option><option value="KRAUS" >KRAUS</option><option value="KRUGER" >KRUGER</option><option value="LAMBERT" >LAMBERT</option><option value="LANCE" >LANCE</option><option value="LANE" >LANE</option><option value="LARSON" >LARSON</option><option value="LARUE" >LARUE</option><option value="LAWRENCE" >LAWRENCE</option><option value="LAWSON" >LAWSON</option><option value="LAWTON" >LAWTON</option><option value="LEE" >LEE</option><option value="LEONE" >LEONE</option><option value="LEWIS" >LEWIS</option><option value="LINTON" >LINTON</option><option value="LITTLE" >LITTLE</option><option value="LOMBARDI" >LOMBARDI</option><option value="LONG" >LONG</option><option value="LOPEZ" >LOPEZ</option><option value="LOVELACE" >LOVELACE</option><option value="LOWE" >LOWE</option><option value="LUCAS" >LUCAS</option><option value="LUMPKIN" >LUMPKIN</option><option value="LYMAN" >LYMAN</option><option value="LYNCH" >LYNCH</option><option value="MACKENZIE" >MACKENZIE</option><option value="MADRIGAL" >MADRIGAL</option><option value="MAHAN" >MAHAN</option><option value="MAHON" >MAHON</option><option value="MALCOLM" >MALCOLM</option><option value="MARK" >MARK</option><option value="MARKHAM" >MARKHAM</option><option value="MARLOW" >MARLOW</option><option value="MARSHALL" >MARSHALL</option><option value="MARTEL" >MARTEL</option><option value="MARTIN" >MARTIN</option><option value="MARTINEZ" >MARTINEZ</option><option value="MARTINO" >MARTINO</option><option value="MASON" >MASON</option><option value="MATTHEWS" >MATTHEWS</option><option value="MATTOX" >MATTOX</option><option value="MAULDIN" >MAULDIN</option><option value="2024-05-03 00:00:00" >2024-05-03 00:00:00</option><option value="MCADAMS" >MCADAMS</option><option value="MCALISTER" >MCALISTER</option><option value="MCCARTER" >MCCARTER</option><option value="MCCARTNEY" >MCCARTNEY</option><option value="MCCOY" >MCCOY</option><option value="MCCRARY" >MCCRARY</option><option value="MCCURDY" >MCCURDY</option><option value="MCDONALD" >MCDONALD</option><option value="MCDUFFIE" >MCDUFFIE</option><option value="MCKINNEY" >MCKINNEY</option><option value="MCWHORTER" >MCWHORTER</option><option value="MEADOR" >MEADOR</option><option value="MEDINA" >MEDINA</option><option value="MEEHAN" >MEEHAN</option><option value="MEEK" >MEEK</option><option value="MENA" >MENA</option><option value="MENARD" >MENARD</option><option value="MENDOZA" >MENDOZA</option><option value="MEYER" >MEYER</option><option value="MILAM" >MILAM</option><option value="MILES" >MILES</option><option value="MILLARD" >MILLARD</option><option value="MILLER" >MILLER</option><option value="MILLS" >MILLS</option><option value="MILNER" >MILNER</option><option value="MITCHELL" >MITCHELL</option><option value="MOELLER" >MOELLER</option><option value="MONTGOMERY" >MONTGOMERY</option><option value="MOORE" >MOORE</option><option value="MORALES" >MORALES</option><option value="MORENO" >MORENO</option><option value="MORGAN" >MORGAN</option><option value="MORRELL" >MORRELL</option><option value="MORRIS" >MORRIS</option><option value="MORRISON" >MORRISON</option><option value="MORRISSEY" >MORRISSEY</option><option value="MOTLEY" >MOTLEY</option><option value="MURPHY" >MURPHY</option><option value="MURRAY" >MURRAY</option><option value="MURRELL" >MURRELL</option><option value="MYERS" >MYERS</option><option value="NEAL" >NEAL</option><option value="NELSON" >NELSON</option><option value="NETTLES" >NETTLES</option><option value="NEUMANN" >NEUMANN</option><option value="NEWSOM" >NEWSOM</option><option value="NGO" >NGO</option><option value="NGUYEN" >NGUYEN</option><option value="NICHOLS" >NICHOLS</option><option value="NOE" >NOE</option><option value="NOLAND" >NOLAND</option><option value="NOLEN" >NOLEN</option><option value="OBRIEN" >OBRIEN</option><option value="OCAMPO" >OCAMPO</option><option value="OGLESBY" >OGLESBY</option><option value="OLIVARES" >OLIVARES</option><option value="OLIVER" >OLIVER</option><option value="OLSON" >OLSON</option><option value="OLVERA" >OLVERA</option><option value="ORTIZ" >ORTIZ</option><option value="OUTLAW" >OUTLAW</option><option value="OWENS" >OWENS</option><option value="PAINE" >PAINE</option><option value="PALMER" >PALMER</option><option value="PARKER" >PARKER</option><option value="PATTERSON" >PATTERSON</option><option value="PAYNE" >PAYNE</option><option value="PEARSON" >PEARSON</option><option value="PEMBERTON" >PEMBERTON</option><option value="PENA" >PENA</option><option value="PEREZ" >PEREZ</option><option value="PERKINS" >PERKINS</option><option value="PERRY" >PERRY</option><option value="PERRYMAN" >PERRYMAN</option><option value="PETERS" >PETERS</option><option value="PETERSON" >PETERSON</option><option value="PFEIFFER" >PFEIFFER</option><option value="PHILLIPS" >PHILLIPS</option><option value="PIERCE" >PIERCE</option><option value="PINSON" >PINSON</option><option value="PITT" >PITT</option><option value="POINDEXTER" >POINDEXTER</option><option value="PORTER" >PORTER</option><option value="POULIN" >POULIN</option><option value="POWELL" >POWELL</option><option value="POWER" >POWER</option><option value="PREWITT" >PREWITT</option><option value="PRICE" >PRICE</option><option value="PULLEN" >PULLEN</option><option value="PURDY" >PURDY</option><option value="QUALLS" >QUALLS</option><option value="QUIGLEY" >QUIGLEY</option><option value="QUINTANILLA" >QUINTANILLA</option><option value="RALSTON" >RALSTON</option><option value="RAMIREZ" >RAMIREZ</option><option value="RAMOS" >RAMOS</option><option value="RAPP" >RAPP</option><option value="RATCLIFF" >RATCLIFF</option><option value="RAY" >RAY</option><option value="REA" >REA</option><option value="REED" >REED</option><option value="REID" >REID</option><option value="RENNER" >RENNER</option><option value="REYES" >REYES</option><option value="REYNOLDS" >REYNOLDS</option><option value="RHOADS" >RHOADS</option><option value="RHODES" >RHODES</option><option value="RICE" >RICE</option><option value="RICHARDS" >RICHARDS</option><option value="RICHARDSON" >RICHARDSON</option><option value="RICKETTS" >RICKETTS</option><option value="RICO" >RICO</option><option value="RILEY" >RILEY</option><option value="RINEHART" >RINEHART</option><option value="RIVERA" >RIVERA</option><option value="ROBB" >ROBB</option><option value="ROBERT" >ROBERT</option><option value="ROBERTS" >ROBERTS</option><option value="ROBERTSON" >ROBERTSON</option><option value="ROBINS" >ROBINS</option><option value="ROBINSON" >ROBINSON</option><option value="RODRIGUEZ" >RODRIGUEZ</option><option value="RODRIQUEZ" >RODRIQUEZ</option><option value="ROGERS" >ROGERS</option><option value="ROMERO" >ROMERO</option><option value="ROSE" >ROSE</option><option value="ROSS" >ROSS</option><option value="ROUSH" >ROUSH</option><option value="ROYAL" >ROYAL</option><option value="RUIZ" >RUIZ</option><option value="RUNYON" >RUNYON</option><option value="RUSSELL" >RUSSELL</option><option value="RYAN" >RYAN</option><option value="SALISBURY" >SALISBURY</option><option value="SANBORN" >SANBORN</option><option value="SANCHEZ" >SANCHEZ</option><option value="SANDERS" >SANDERS</option><option value="SATTERFIELD" >SATTERFIELD</option><option value="SAUER" >SAUER</option><option value="SCARBOROUGH" >SCARBOROUGH</option><option value="SCHILLING" >SCHILLING</option><option value="SCHMIDT" >SCHMIDT</option><option value="SCHOFIELD" >SCHOFIELD</option><option value="SCHRADER" >SCHRADER</option><option value="SCHULER" >SCHULER</option><option value="SCHWAB" >SCHWAB</option><option value="SCHWARZ" >SCHWARZ</option><option value="SCOTT" >SCOTT</option><option value="SCROGGINS" >SCROGGINS</option><option value="SEAL" >SEAL</option><option value="SELBY" >SELBY</option><option value="SEWARD" >SEWARD</option><option value="SHANKS" >SHANKS</option><option value="SHAW" >SHAW</option><option value="SHELBY" >SHELBY</option><option value="SHELLEY" >SHELLEY</option><option value="SHELTON" >SHELTON</option><option value="SHERROD" >SHERROD</option><option value="SIKES" >SIKES</option><option value="SILVA" >SILVA</option><option value="SILVERMAN" >SILVERMAN</option><option value="SIMMONS" >SIMMONS</option><option value="SIMPKINS" >SIMPKINS</option><option value="SIMPSON" >SIMPSON</option><option value="SIMS" >SIMS</option><option value="SKIDMORE" >SKIDMORE</option><option value="SLEDGE" >SLEDGE</option><option value="SLONE" >SLONE</option><option value="SMITH" >SMITH</option><option value="SNYDER" >SNYDER</option><option value="SOTO" >SOTO</option><option value="SOUTH" >SOUTH</option><option value="SPEAR" >SPEAR</option><option value="SPENCER" >SPENCER</option><option value="SPURLOCK" >SPURLOCK</option><option value="STANFIELD" >STANFIELD</option><option value="STANLEY" >STANLEY</option><option value="STCLAIR" >STCLAIR</option><option value="STEPHENS" >STEPHENS</option><option value="STEPP" >STEPP</option><option value="STEVENS" >STEVENS</option><option value="STEWART" >STEWART</option><option value="STILL" >STILL</option><option value="STONE" >STONE</option><option value="SULLIVAN" >SULLIVAN</option><option value="SUTTON" >SUTTON</option><option value="SWAFFORD" >SWAFFORD</option><option value="TALBERT" >TALBERT</option><option value="TAN" >TAN</option><option value="TAYLOR" >TAYLOR</option><option value="TEEL" >TEEL</option><option value="TERRY" >TERRY</option><option value="THOMAS" >THOMAS</option><option value="THOMPSON" >THOMPSON</option><option value="THORN" >THORN</option><option value="THRASHER" >THRASHER</option><option value="TIRADO" >TIRADO</option><option value="TOBIAS" >TOBIAS</option><option value="TOMLIN" >TOMLIN</option><option value="TORRES" >TORRES</option><option value="TROUT" >TROUT</option><option value="TROUTMAN" >TROUTMAN</option><option value="TRUONG" >TRUONG</option><option value="TUBBS" >TUBBS</option><option value="TUCKER" >TUCKER</option><option value="TURNER" >TURNER</option><option value="TURPIN" >TURPIN</option><option value="VANHORN" >VANHORN</option><option value="VARGAS" >VARGAS</option><option value="VARNEY" >VARNEY</option><option value="VASQUEZ" >VASQUEZ</option><option value="VEST" >VEST</option><option value="VINES" >VINES</option><option value="VU" >VU</option><option value="WADE" >WADE</option><option value="WAGGONER" >WAGGONER</option><option value="WAGNER" >WAGNER</option><option value="WALDROP" >WALDROP</option><option value="WALKER" >WALKER</option><option value="WALLACE" >WALLACE</option><option value="WALTERS" >WALTERS</option><option value="WARD" >WARD</option><option value="WARREN" >WARREN</option><option value="WASHINGTON" >WASHINGTON</option><option value="WATKINS" >WATKINS</option><option value="WATSON" >WATSON</option><option value="WATTS" >WATTS</option><option value="WAUGH" >WAUGH</option><option value="WAY" >WAY</option><option value="WEAVER" >WEAVER</option><option value="WEBB" >WEBB</option><option value="WEINER" >WEINER</option><option value="WELCH" >WELCH</option><option value="WELLS" >WELLS</option><option value="2024-05-03 07:29:29" >2024-05-03 07:29:29</option><option value="WESTMORELAND" >WESTMORELAND</option><option value="WHEAT" >WHEAT</option><option value="WHEELER" >WHEELER</option><option value="WHITE" >WHITE</option><option value="WHITING" >WHITING</option><option value="WILES" >WILES</option><option value="WILLIAMS" >WILLIAMS</option><option value="WILLIAMSON" >WILLIAMSON</option><option value="WILLIS" >WILLIS</option><option value="WILSON" >WILSON</option><option value="WINDHAM" >WINDHAM</option><option value="WOFFORD" >WOFFORD</option><option value="WOOD" >WOOD</option><option value="WOODS" >WOODS</option><option value="WREN" >WREN</option><option value="WRIGHT" >WRIGHT</option><option value="WYMAN" >WYMAN</option><option value="YANEZ" >YANEZ</option><option value="YEE" >YEE</option><option value="YOUNG" >YOUNG</option></select></div><div class="row gx-0 mb-3"><label for="customer_filter_email" class="form-label">Email</label><select id="customer_filter_email" name="customer_filter_email" class="form-select-sm form-select" data-slimselect="true" data-allow-deselect="true" data-allow-deselect-option="true" data-placeholder="Select ..."><option value=""  selected="selected" label="Select" data-placeholder="true"></option><option value="AARON.SELBY@sakilacustomer.org" >AARON.SELBY@sakilacustomer.org</option><option value="ADAM.GOOCH@sakilacustomer.org" >ADAM.GOOCH@sakilacustomer.org</option><option value="ADRIAN.CLARY@sakilacustomer.org" >ADRIAN.CLARY@sakilacustomer.org</option><option value="AGNES.BISHOP@sakilacustomer.org" >AGNES.BISHOP@sakilacustomer.org</option><option value="ALAN.KAHN@sakilacustomer.org" >ALAN.KAHN@sakilacustomer.org</option><option value="ALBERT.CROUSE@sakilacustomer.org" >ALBERT.CROUSE@sakilacustomer.org</option><option value="ALBERTO.HENNING@sakilacustomer.org" >ALBERTO.HENNING@sakilacustomer.org</option><option value="ALEX.GRESHAM@sakilacustomer.org" >ALEX.GRESHAM@sakilacustomer.org</option><option value="ALEXANDER.FENNELL@sakilacustomer.org" >ALEXANDER.FENNELL@sakilacustomer.org</option><option value="ALFRED.CASILLAS@sakilacustomer.org" >ALFRED.CASILLAS@sakilacustomer.org</option><option value="ALFREDO.MCADAMS@sakilacustomer.org" >ALFREDO.MCADAMS@sakilacustomer.org</option><option value="ALICE.STEWART@sakilacustomer.org" >ALICE.STEWART@sakilacustomer.org</option><option value="ALICIA.MILLS@sakilacustomer.org" >ALICIA.MILLS@sakilacustomer.org</option><option value="ALLAN.CORNISH@sakilacustomer.org" >ALLAN.CORNISH@sakilacustomer.org</option><option value="ALLEN.BUTTERFIELD@sakilacustomer.org" >ALLEN.BUTTERFIELD@sakilacustomer.org</option><option value="ALLISON.STANLEY@sakilacustomer.org" >ALLISON.STANLEY@sakilacustomer.org</option><option value="ALMA.AUSTIN@sakilacustomer.org" >ALMA.AUSTIN@sakilacustomer.org</option><option value="ALVIN.DELOACH@sakilacustomer.org" >ALVIN.DELOACH@sakilacustomer.org</option><option value="AMANDA.CARTER@sakilacustomer.org" >AMANDA.CARTER@sakilacustomer.org</option><option value="AMBER.DIXON@sakilacustomer.org" >AMBER.DIXON@sakilacustomer.org</option><option value="AMY.LOPEZ@sakilacustomer.org" >AMY.LOPEZ@sakilacustomer.org</option><option value="ANA.BRADLEY@sakilacustomer.org" >ANA.BRADLEY@sakilacustomer.org</option><option value="ANDRE.RAPP@sakilacustomer.org" >ANDRE.RAPP@sakilacustomer.org</option><option value="ANDREA.HENDERSON@sakilacustomer.org" >ANDREA.HENDERSON@sakilacustomer.org</option><option value="ANDREW.PURDY@sakilacustomer.org" >ANDREW.PURDY@sakilacustomer.org</option><option value="ANDY.VANHORN@sakilacustomer.org" >ANDY.VANHORN@sakilacustomer.org</option><option value="ANGEL.BARCLAY@sakilacustomer.org" >ANGEL.BARCLAY@sakilacustomer.org</option><option value="ANGELA.HERNANDEZ@sakilacustomer.org" >ANGELA.HERNANDEZ@sakilacustomer.org</option><option value="ANITA.MORALES@sakilacustomer.org" >ANITA.MORALES@sakilacustomer.org</option><option value="ANN.EVANS@sakilacustomer.org" >ANN.EVANS@sakilacustomer.org</option><option value="ANNA.HILL@sakilacustomer.org" >ANNA.HILL@sakilacustomer.org</option><option value="ANNE.POWELL@sakilacustomer.org" >ANNE.POWELL@sakilacustomer.org</option><option value="ANNETTE.OLSON@sakilacustomer.org" >ANNETTE.OLSON@sakilacustomer.org</option><option value="ANNIE.RUSSELL@sakilacustomer.org" >ANNIE.RUSSELL@sakilacustomer.org</option><option value="ANTHONY.SCHWAB@sakilacustomer.org" >ANTHONY.SCHWAB@sakilacustomer.org</option><option value="ANTONIO.MEEK@sakilacustomer.org" >ANTONIO.MEEK@sakilacustomer.org</option><option value="APRIL.BURNS@sakilacustomer.org" >APRIL.BURNS@sakilacustomer.org</option><option value="ARLENE.HARVEY@sakilacustomer.org" >ARLENE.HARVEY@sakilacustomer.org</option><option value="ARMANDO.GRUBER@sakilacustomer.org" >ARMANDO.GRUBER@sakilacustomer.org</option><option value="ARNOLD.HAVENS@sakilacustomer.org" >ARNOLD.HAVENS@sakilacustomer.org</option><option value="ARTHUR.SIMPKINS@sakilacustomer.org" >ARTHUR.SIMPKINS@sakilacustomer.org</option><option value="ASHLEY.RICHARDSON@sakilacustomer.org" >ASHLEY.RICHARDSON@sakilacustomer.org</option><option value="AUDREY.RAY@sakilacustomer.org" >AUDREY.RAY@sakilacustomer.org</option><option value="AUSTIN.CINTRON@sakilacustomer.org" >AUSTIN.CINTRON@sakilacustomer.org</option><option value="BARBARA.JONES@sakilacustomer.org" >BARBARA.JONES@sakilacustomer.org</option><option value="BARRY.LOVELACE@sakilacustomer.org" >BARRY.LOVELACE@sakilacustomer.org</option><option value="BEATRICE.ARNOLD@sakilacustomer.org" >BEATRICE.ARNOLD@sakilacustomer.org</option><option value="BECKY.MILES@sakilacustomer.org" >BECKY.MILES@sakilacustomer.org</option><option value="BEN.EASTER@sakilacustomer.org" >BEN.EASTER@sakilacustomer.org</option><option value="BENJAMIN.VARNEY@sakilacustomer.org" >BENJAMIN.VARNEY@sakilacustomer.org</option><option value="BERNARD.COLBY@sakilacustomer.org" >BERNARD.COLBY@sakilacustomer.org</option><option value="BERNICE.WILLIS@sakilacustomer.org" >BERNICE.WILLIS@sakilacustomer.org</option><option value="BERTHA.FERGUSON@sakilacustomer.org" >BERTHA.FERGUSON@sakilacustomer.org</option><option value="BESSIE.MORRISON@sakilacustomer.org" >BESSIE.MORRISON@sakilacustomer.org</option><option value="BETH.FRANKLIN@sakilacustomer.org" >BETH.FRANKLIN@sakilacustomer.org</option><option value="BETTY.WHITE@sakilacustomer.org" >BETTY.WHITE@sakilacustomer.org</option><option value="BEVERLY.BROOKS@sakilacustomer.org" >BEVERLY.BROOKS@sakilacustomer.org</option><option value="BILL.GAVIN@sakilacustomer.org" >BILL.GAVIN@sakilacustomer.org</option><option value="BILLIE.HORTON@sakilacustomer.org" >BILLIE.HORTON@sakilacustomer.org</option><option value="BILLY.POULIN@sakilacustomer.org" >BILLY.POULIN@sakilacustomer.org</option><option value="BOB.PFEIFFER@sakilacustomer.org" >BOB.PFEIFFER@sakilacustomer.org</option><option value="BOBBIE.CRAIG@sakilacustomer.org" >BOBBIE.CRAIG@sakilacustomer.org</option><option value="BOBBY.BOUDREAU@sakilacustomer.org" >BOBBY.BOUDREAU@sakilacustomer.org</option><option value="BONNIE.HUGHES@sakilacustomer.org" >BONNIE.HUGHES@sakilacustomer.org</option><option value="BRAD.MCCURDY@sakilacustomer.org" >BRAD.MCCURDY@sakilacustomer.org</option><option value="BRADLEY.MOTLEY@sakilacustomer.org" >BRADLEY.MOTLEY@sakilacustomer.org</option><option value="BRANDON.HUEY@sakilacustomer.org" >BRANDON.HUEY@sakilacustomer.org</option><option value="BRANDY.GRAVES@sakilacustomer.org" >BRANDY.GRAVES@sakilacustomer.org</option><option value="BRENDA.WRIGHT@sakilacustomer.org" >BRENDA.WRIGHT@sakilacustomer.org</option><option value="BRENT.HARKINS@sakilacustomer.org" >BRENT.HARKINS@sakilacustomer.org</option><option value="BRETT.CORNWELL@sakilacustomer.org" >BRETT.CORNWELL@sakilacustomer.org</option><option value="BRIAN.WYMAN@sakilacustomer.org" >BRIAN.WYMAN@sakilacustomer.org</option><option value="BRITTANY.RILEY@sakilacustomer.org" >BRITTANY.RILEY@sakilacustomer.org</option><option value="BRUCE.SCHWARZ@sakilacustomer.org" >BRUCE.SCHWARZ@sakilacustomer.org</option><option value="BRYAN.HARDISON@sakilacustomer.org" >BRYAN.HARDISON@sakilacustomer.org</option><option value="BYRON.BOX@sakilacustomer.org" >BYRON.BOX@sakilacustomer.org</option><option value="CALVIN.MARTEL@sakilacustomer.org" >CALVIN.MARTEL@sakilacustomer.org</option><option value="CARL.ARTIS@sakilacustomer.org" >CARL.ARTIS@sakilacustomer.org</option><option value="CARLA.GUTIERREZ@sakilacustomer.org" >CARLA.GUTIERREZ@sakilacustomer.org</option><option value="CARLOS.COUGHLIN@sakilacustomer.org" >CARLOS.COUGHLIN@sakilacustomer.org</option><option value="CARMEN.OWENS@sakilacustomer.org" >CARMEN.OWENS@sakilacustomer.org</option><option value="CAROL.GARCIA@sakilacustomer.org" >CAROL.GARCIA@sakilacustomer.org</option><option value="CAROLE.BARNETT@sakilacustomer.org" >CAROLE.BARNETT@sakilacustomer.org</option><option value="CAROLINE.BOWMAN@sakilacustomer.org" >CAROLINE.BOWMAN@sakilacustomer.org</option><option value="CAROLYN.PEREZ@sakilacustomer.org" >CAROLYN.PEREZ@sakilacustomer.org</option><option value="CARRIE.PORTER@sakilacustomer.org" >CARRIE.PORTER@sakilacustomer.org</option><option value="CASEY.MENA@sakilacustomer.org" >CASEY.MENA@sakilacustomer.org</option><option value="CASSANDRA.WALTERS@sakilacustomer.org" >CASSANDRA.WALTERS@sakilacustomer.org</option><option value="CATHERINE.CAMPBELL@sakilacustomer.org" >CATHERINE.CAMPBELL@sakilacustomer.org</option><option value="CATHY.SPENCER@sakilacustomer.org" >CATHY.SPENCER@sakilacustomer.org</option><option value="CECIL.VINES@sakilacustomer.org" >CECIL.VINES@sakilacustomer.org</option><option value="CHAD.CARBONE@sakilacustomer.org" >CHAD.CARBONE@sakilacustomer.org</option><option value="CHARLENE.ALVAREZ@sakilacustomer.org" >CHARLENE.ALVAREZ@sakilacustomer.org</option><option value="CHARLES.KOWALSKI@sakilacustomer.org" >CHARLES.KOWALSKI@sakilacustomer.org</option><option value="CHARLIE.BESS@sakilacustomer.org" >CHARLIE.BESS@sakilacustomer.org</option><option value="CHARLOTTE.HUNTER@sakilacustomer.org" >CHARLOTTE.HUNTER@sakilacustomer.org</option><option value="CHERYL.MURPHY@sakilacustomer.org" >CHERYL.MURPHY@sakilacustomer.org</option><option value="CHESTER.BENNER@sakilacustomer.org" >CHESTER.BENNER@sakilacustomer.org</option><option value="CHRIS.BROTHERS@sakilacustomer.org" >CHRIS.BROTHERS@sakilacustomer.org</option><option value="CHRISTIAN.JUNG@sakilacustomer.org" >CHRISTIAN.JUNG@sakilacustomer.org</option><option value="CHRISTINA.RAMIREZ@sakilacustomer.org" >CHRISTINA.RAMIREZ@sakilacustomer.org</option><option value="CHRISTINE.ROBERTS@sakilacustomer.org" >CHRISTINE.ROBERTS@sakilacustomer.org</option><option value="CHRISTOPHER.GRECO@sakilacustomer.org" >CHRISTOPHER.GRECO@sakilacustomer.org</option><option value="CHRISTY.VARGAS@sakilacustomer.org" >CHRISTY.VARGAS@sakilacustomer.org</option><option value="CINDY.FISHER@sakilacustomer.org" >CINDY.FISHER@sakilacustomer.org</option><option value="CLARA.SHAW@sakilacustomer.org" >CLARA.SHAW@sakilacustomer.org</option><option value="CLARENCE.GAMEZ@sakilacustomer.org" >CLARENCE.GAMEZ@sakilacustomer.org</option><option value="CLAUDE.HERZOG@sakilacustomer.org" >CLAUDE.HERZOG@sakilacustomer.org</option><option value="CLAUDIA.FULLER@sakilacustomer.org" >CLAUDIA.FULLER@sakilacustomer.org</option><option value="CLAYTON.BARBEE@sakilacustomer.org" >CLAYTON.BARBEE@sakilacustomer.org</option><option value="CLIFFORD.BOWENS@sakilacustomer.org" >CLIFFORD.BOWENS@sakilacustomer.org</option><option value="CLIFTON.MALCOLM@sakilacustomer.org" >CLIFTON.MALCOLM@sakilacustomer.org</option><option value="CLINTON.BUFORD@sakilacustomer.org" >CLINTON.BUFORD@sakilacustomer.org</option><option value="CLYDE.TOBIAS@sakilacustomer.org" >CLYDE.TOBIAS@sakilacustomer.org</option><option value="CODY.NOLEN@sakilacustomer.org" >CODY.NOLEN@sakilacustomer.org</option><option value="COLLEEN.BURTON@sakilacustomer.org" >COLLEEN.BURTON@sakilacustomer.org</option><option value="CONNIE.WALLACE@sakilacustomer.org" >CONNIE.WALLACE@sakilacustomer.org</option><option value="CONSTANCE.REID@sakilacustomer.org" >CONSTANCE.REID@sakilacustomer.org</option><option value="COREY.HAUSER@sakilacustomer.org" >COREY.HAUSER@sakilacustomer.org</option><option value="CORY.MEEHAN@sakilacustomer.org" >CORY.MEEHAN@sakilacustomer.org</option><option value="COURTNEY.DAY@sakilacustomer.org" >COURTNEY.DAY@sakilacustomer.org</option><option value="CRAIG.MORRELL@sakilacustomer.org" >CRAIG.MORRELL@sakilacustomer.org</option><option value="CRYSTAL.FORD@sakilacustomer.org" >CRYSTAL.FORD@sakilacustomer.org</option><option value="CURTIS.IRBY@sakilacustomer.org" >CURTIS.IRBY@sakilacustomer.org</option><option value="CYNTHIA.YOUNG@sakilacustomer.org" >CYNTHIA.YOUNG@sakilacustomer.org</option><option value="DAISY.BATES@sakilacustomer.org" >DAISY.BATES@sakilacustomer.org</option><option value="DALE.RATCLIFF@sakilacustomer.org" >DALE.RATCLIFF@sakilacustomer.org</option><option value="DAN.PAINE@sakilacustomer.org" >DAN.PAINE@sakilacustomer.org</option><option value="DANA.HART@sakilacustomer.org" >DANA.HART@sakilacustomer.org</option><option value="DANIEL.CABRAL@sakilacustomer.org" >DANIEL.CABRAL@sakilacustomer.org</option><option value="DANIELLE.DANIELS@sakilacustomer.org" >DANIELLE.DANIELS@sakilacustomer.org</option><option value="DANNY.ISOM@sakilacustomer.org" >DANNY.ISOM@sakilacustomer.org</option><option value="DARLENE.ROSE@sakilacustomer.org" >DARLENE.ROSE@sakilacustomer.org</option><option value="DARRELL.POWER@sakilacustomer.org" >DARRELL.POWER@sakilacustomer.org</option><option value="DARREN.WINDHAM@sakilacustomer.org" >DARREN.WINDHAM@sakilacustomer.org</option><option value="DARRYL.ASHCRAFT@sakilacustomer.org" >DARRYL.ASHCRAFT@sakilacustomer.org</option><option value="DARYL.LARUE@sakilacustomer.org" >DARYL.LARUE@sakilacustomer.org</option><option value="DAVE.GARDINER@sakilacustomer.org" >DAVE.GARDINER@sakilacustomer.org</option><option value="DAVID.ROYAL@sakilacustomer.org" >DAVID.ROYAL@sakilacustomer.org</option><option value="DAWN.SULLIVAN@sakilacustomer.org" >DAWN.SULLIVAN@sakilacustomer.org</option><option value="DEAN.SAUER@sakilacustomer.org" >DEAN.SAUER@sakilacustomer.org</option><option value="DEANNA.BYRD@sakilacustomer.org" >DEANNA.BYRD@sakilacustomer.org</option><option value="DEBBIE.REYES@sakilacustomer.org" >DEBBIE.REYES@sakilacustomer.org</option><option value="DEBORAH.WALKER@sakilacustomer.org" >DEBORAH.WALKER@sakilacustomer.org</option><option value="DEBRA.NELSON@sakilacustomer.org" >DEBRA.NELSON@sakilacustomer.org</option><option value="DELORES.HANSEN@sakilacustomer.org" >DELORES.HANSEN@sakilacustomer.org</option><option value="DENISE.KELLY@sakilacustomer.org" >DENISE.KELLY@sakilacustomer.org</option><option value="DENNIS.GILMAN@sakilacustomer.org" >DENNIS.GILMAN@sakilacustomer.org</option><option value="DEREK.BLAKELY@sakilacustomer.org" >DEREK.BLAKELY@sakilacustomer.org</option><option value="DERRICK.BOURQUE@sakilacustomer.org" >DERRICK.BOURQUE@sakilacustomer.org</option><option value="DIANA.ALEXANDER@sakilacustomer.org" >DIANA.ALEXANDER@sakilacustomer.org</option><option value="DIANE.COLLINS@sakilacustomer.org" >DIANE.COLLINS@sakilacustomer.org</option><option value="DIANNE.SHELTON@sakilacustomer.org" >DIANNE.SHELTON@sakilacustomer.org</option><option value="DOLORES.WAGNER@sakilacustomer.org" >DOLORES.WAGNER@sakilacustomer.org</option><option value="DON.BONE@sakilacustomer.org" >DON.BONE@sakilacustomer.org</option><option value="DONALD.MAHON@sakilacustomer.org" >DONALD.MAHON@sakilacustomer.org</option><option value="DONNA.THOMPSON@sakilacustomer.org" >DONNA.THOMPSON@sakilacustomer.org</option><option value="DORA.MEDINA@sakilacustomer.org" >DORA.MEDINA@sakilacustomer.org</option><option value="DORIS.REED@sakilacustomer.org" >DORIS.REED@sakilacustomer.org</option><option value="DOROTHY.TAYLOR@sakilacustomer.org" >DOROTHY.TAYLOR@sakilacustomer.org</option><option value="DOUGLAS.GRAF@sakilacustomer.org" >DOUGLAS.GRAF@sakilacustomer.org</option><option value="DUANE.TUBBS@sakilacustomer.org" >DUANE.TUBBS@sakilacustomer.org</option><option value="DUSTIN.GILLETTE@sakilacustomer.org" >DUSTIN.GILLETTE@sakilacustomer.org</option><option value="DWAYNE.OLVERA@sakilacustomer.org" >DWAYNE.OLVERA@sakilacustomer.org</option><option value="DWIGHT.LOMBARDI@sakilacustomer.org" >DWIGHT.LOMBARDI@sakilacustomer.org</option><option value="EARL.SHANKS@sakilacustomer.org" >EARL.SHANKS@sakilacustomer.org</option><option value="EDDIE.TOMLIN@sakilacustomer.org" >EDDIE.TOMLIN@sakilacustomer.org</option><option value="EDGAR.RHOADS@sakilacustomer.org" >EDGAR.RHOADS@sakilacustomer.org</option><option value="EDITH.MCDONALD@sakilacustomer.org" >EDITH.MCDONALD@sakilacustomer.org</option><option value="EDNA.WEST@sakilacustomer.org" >EDNA.WEST@sakilacustomer.org</option><option value="EDUARDO.HIATT@sakilacustomer.org" >EDUARDO.HIATT@sakilacustomer.org</option><option value="EDWARD.BAUGH@sakilacustomer.org" >EDWARD.BAUGH@sakilacustomer.org</option><option value="EDWIN.BURK@sakilacustomer.org" >EDWIN.BURK@sakilacustomer.org</option><option value="EILEEN.CARR@sakilacustomer.org" >EILEEN.CARR@sakilacustomer.org</option><option value="ELAINE.STEVENS@sakilacustomer.org" >ELAINE.STEVENS@sakilacustomer.org</option><option value="ELEANOR.HUNT@sakilacustomer.org" >ELEANOR.HUNT@sakilacustomer.org</option><option value="ELIZABETH.BROWN@sakilacustomer.org" >ELIZABETH.BROWN@sakilacustomer.org</option><option value="ELLA.OLIVER@sakilacustomer.org" >ELLA.OLIVER@sakilacustomer.org</option><option value="ELLEN.SIMPSON@sakilacustomer.org" >ELLEN.SIMPSON@sakilacustomer.org</option><option value="ELMER.NOE@sakilacustomer.org" >ELMER.NOE@sakilacustomer.org</option><option value="ELSIE.KELLEY@sakilacustomer.org" >ELSIE.KELLEY@sakilacustomer.org</option><option value="EMILY.DIAZ@sakilacustomer.org" >EMILY.DIAZ@sakilacustomer.org</option><option value="EMMA.BOYD@sakilacustomer.org" >EMMA.BOYD@sakilacustomer.org</option><option value="ENRIQUE.FORSYTHE@sakilacustomer.org" >ENRIQUE.FORSYTHE@sakilacustomer.org</option><option value="ERIC.ROBERT@sakilacustomer.org" >ERIC.ROBERT@sakilacustomer.org</option><option value="ERICA.MATTHEWS@sakilacustomer.org" >ERICA.MATTHEWS@sakilacustomer.org</option><option value="ERIK.GUILLEN@sakilacustomer.org" >ERIK.GUILLEN@sakilacustomer.org</option><option value="ERIKA.PENA@sakilacustomer.org" >ERIKA.PENA@sakilacustomer.org</option><option value="ERIN.DUNN@sakilacustomer.org" >ERIN.DUNN@sakilacustomer.org</option><option value="ERNEST.STEPP@sakilacustomer.org" >ERNEST.STEPP@sakilacustomer.org</option><option value="ESTHER.CRAWFORD@sakilacustomer.org" >ESTHER.CRAWFORD@sakilacustomer.org</option><option value="ETHEL.WEBB@sakilacustomer.org" >ETHEL.WEBB@sakilacustomer.org</option><option value="EUGENE.CULPEPPER@sakilacustomer.org" >EUGENE.CULPEPPER@sakilacustomer.org</option><option value="EVA.RAMOS@sakilacustomer.org" >EVA.RAMOS@sakilacustomer.org</option><option value="EVELYN.MORGAN@sakilacustomer.org" >EVELYN.MORGAN@sakilacustomer.org</option><option value="EVERETT.BANDA@sakilacustomer.org" >EVERETT.BANDA@sakilacustomer.org</option><option value="FELICIA.SUTTON@sakilacustomer.org" >FELICIA.SUTTON@sakilacustomer.org</option><option value="FELIX.GAFFNEY@sakilacustomer.org" >FELIX.GAFFNEY@sakilacustomer.org</option><option value="FERNANDO.CHURCHILL@sakilacustomer.org" >FERNANDO.CHURCHILL@sakilacustomer.org</option><option value="FLORENCE.WOODS@sakilacustomer.org" >FLORENCE.WOODS@sakilacustomer.org</option><option value="FLOYD.GANDY@sakilacustomer.org" >FLOYD.GANDY@sakilacustomer.org</option><option value="FRANCES.PARKER@sakilacustomer.org" >FRANCES.PARKER@sakilacustomer.org</option><option value="FRANCIS.SIKES@sakilacustomer.org" >FRANCIS.SIKES@sakilacustomer.org</option><option value="FRANCISCO.SKIDMORE@sakilacustomer.org" >FRANCISCO.SKIDMORE@sakilacustomer.org</option><option value="FRANK.WAGGONER@sakilacustomer.org" >FRANK.WAGGONER@sakilacustomer.org</option><option value="FRANKLIN.TROUTMAN@sakilacustomer.org" >FRANKLIN.TROUTMAN@sakilacustomer.org</option><option value="FRED.WHEAT@sakilacustomer.org" >FRED.WHEAT@sakilacustomer.org</option><option value="FREDDIE.DUGGAN@sakilacustomer.org" >FREDDIE.DUGGAN@sakilacustomer.org</option><option value="FREDERICK.ISBELL@sakilacustomer.org" >FREDERICK.ISBELL@sakilacustomer.org</option><option value="GABRIEL.HARDER@sakilacustomer.org" >GABRIEL.HARDER@sakilacustomer.org</option><option value="GAIL.KNIGHT@sakilacustomer.org" >GAIL.KNIGHT@sakilacustomer.org</option><option value="GARY.COY@sakilacustomer.org" >GARY.COY@sakilacustomer.org</option><option value="GENE.SANBORN@sakilacustomer.org" >GENE.SANBORN@sakilacustomer.org</option><option value="GEORGE.LINTON@sakilacustomer.org" >GEORGE.LINTON@sakilacustomer.org</option><option value="GEORGIA.JACOBS@sakilacustomer.org" >GEORGIA.JACOBS@sakilacustomer.org</option><option value="GERALD.FULTZ@sakilacustomer.org" >GERALD.FULTZ@sakilacustomer.org</option><option value="GERALDINE.PERKINS@sakilacustomer.org" >GERALDINE.PERKINS@sakilacustomer.org</option><option value="GERTRUDE.CASTILLO@sakilacustomer.org" >GERTRUDE.CASTILLO@sakilacustomer.org</option><option value="GILBERT.SLEDGE@sakilacustomer.org" >GILBERT.SLEDGE@sakilacustomer.org</option><option value="GINA.WILLIAMSON@sakilacustomer.org" >GINA.WILLIAMSON@sakilacustomer.org</option><option value="GLADYS.HAMILTON@sakilacustomer.org" >GLADYS.HAMILTON@sakilacustomer.org</option><option value="GLEN.TALBERT@sakilacustomer.org" >GLEN.TALBERT@sakilacustomer.org</option><option value="GLENDA.FRAZIER@sakilacustomer.org" >GLENDA.FRAZIER@sakilacustomer.org</option><option value="GLENN.PULLEN@sakilacustomer.org" >GLENN.PULLEN@sakilacustomer.org</option><option value="GLORIA.COOK@sakilacustomer.org" >GLORIA.COOK@sakilacustomer.org</option><option value="GORDON.ALLARD@sakilacustomer.org" >GORDON.ALLARD@sakilacustomer.org</option><option value="GRACE.ELLIS@sakilacustomer.org" >GRACE.ELLIS@sakilacustomer.org</option><option value="GREG.ROBINS@sakilacustomer.org" >GREG.ROBINS@sakilacustomer.org</option><option value="GREGORY.MAULDIN@sakilacustomer.org" >GREGORY.MAULDIN@sakilacustomer.org</option><option value="GUY.BROWNLEE@sakilacustomer.org" >GUY.BROWNLEE@sakilacustomer.org</option><option value="GWENDOLYN.MAY@sakilacustomer.org" >GWENDOLYN.MAY@sakilacustomer.org</option><option value="HAROLD.MARTINO@sakilacustomer.org" >HAROLD.MARTINO@sakilacustomer.org</option><option value="HARRY.ARCE@sakilacustomer.org" >HARRY.ARCE@sakilacustomer.org</option><option value="HARVEY.GUAJARDO@sakilacustomer.org" >HARVEY.GUAJARDO@sakilacustomer.org</option><option value="HAZEL.WARREN@sakilacustomer.org" >HAZEL.WARREN@sakilacustomer.org</option><option value="HEATHER.MORRIS@sakilacustomer.org" >HEATHER.MORRIS@sakilacustomer.org</option><option value="HECTOR.POINDEXTER@sakilacustomer.org" >HECTOR.POINDEXTER@sakilacustomer.org</option><option value="HEIDI.LARSON@sakilacustomer.org" >HEIDI.LARSON@sakilacustomer.org</option><option value="HELEN.HARRIS@sakilacustomer.org" >HELEN.HARRIS@sakilacustomer.org</option><option value="HENRY.BILLINGSLEY@sakilacustomer.org" >HENRY.BILLINGSLEY@sakilacustomer.org</option><option value="HERBERT.KRUGER@sakilacustomer.org" >HERBERT.KRUGER@sakilacustomer.org</option><option value="HERMAN.DEVORE@sakilacustomer.org" >HERMAN.DEVORE@sakilacustomer.org</option><option value="HILDA.HOPKINS@sakilacustomer.org" >HILDA.HOPKINS@sakilacustomer.org</option><option value="HOLLY.FOX@sakilacustomer.org" >HOLLY.FOX@sakilacustomer.org</option><option value="HOWARD.FORTNER@sakilacustomer.org" >HOWARD.FORTNER@sakilacustomer.org</option><option value="HUGH.WALDROP@sakilacustomer.org" >HUGH.WALDROP@sakilacustomer.org</option><option value="IAN.STILL@sakilacustomer.org" >IAN.STILL@sakilacustomer.org</option><option value="IDA.ANDREWS@sakilacustomer.org" >IDA.ANDREWS@sakilacustomer.org</option><option value="IRENE.PRICE@sakilacustomer.org" >IRENE.PRICE@sakilacustomer.org</option><option value="IRMA.PEARSON@sakilacustomer.org" >IRMA.PEARSON@sakilacustomer.org</option><option value="ISAAC.OGLESBY@sakilacustomer.org" >ISAAC.OGLESBY@sakilacustomer.org</option><option value="IVAN.CROMWELL@sakilacustomer.org" >IVAN.CROMWELL@sakilacustomer.org</option><option value="JACK.FOUST@sakilacustomer.org" >JACK.FOUST@sakilacustomer.org</option><option value="JACKIE.LYNCH@sakilacustomer.org" >JACKIE.LYNCH@sakilacustomer.org</option><option value="JACOB.LANCE@sakilacustomer.org" >JACOB.LANCE@sakilacustomer.org</option><option value="JACQUELINE.LONG@sakilacustomer.org" >JACQUELINE.LONG@sakilacustomer.org</option><option value="JAIME.NETTLES@sakilacustomer.org" >JAIME.NETTLES@sakilacustomer.org</option><option value="JAMES.GANNON@sakilacustomer.org" >JAMES.GANNON@sakilacustomer.org</option><option value="JAMIE.RICE@sakilacustomer.org" >JAMIE.RICE@sakilacustomer.org</option><option value="JAMIE.WAUGH@sakilacustomer.org" >JAMIE.WAUGH@sakilacustomer.org</option><option value="JANE.BENNETT@sakilacustomer.org" >JANE.BENNETT@sakilacustomer.org</option><option value="JANET.PHILLIPS@sakilacustomer.org" >JANET.PHILLIPS@sakilacustomer.org</option><option value="JANICE.WARD@sakilacustomer.org" >JANICE.WARD@sakilacustomer.org</option><option value="JARED.ELY@sakilacustomer.org" >JARED.ELY@sakilacustomer.org</option><option value="JASON.MORRISSEY@sakilacustomer.org" >JASON.MORRISSEY@sakilacustomer.org</option><option value="JAVIER.ELROD@sakilacustomer.org" >JAVIER.ELROD@sakilacustomer.org</option><option value="JAY.ROBB@sakilacustomer.org" >JAY.ROBB@sakilacustomer.org</option><option value="JEAN.BELL@sakilacustomer.org" >JEAN.BELL@sakilacustomer.org</option><option value="JEANETTE.GREENE@sakilacustomer.org" >JEANETTE.GREENE@sakilacustomer.org</option><option value="JEANNE.LAWSON@sakilacustomer.org" >JEANNE.LAWSON@sakilacustomer.org</option><option value="JEFF.EAST@sakilacustomer.org" >JEFF.EAST@sakilacustomer.org</option><option value="JEFFERY.PINSON@sakilacustomer.org" >JEFFERY.PINSON@sakilacustomer.org</option><option value="JEFFREY.SPEAR@sakilacustomer.org" >JEFFREY.SPEAR@sakilacustomer.org</option><option value="JENNIE.TERRY@sakilacustomer.org" >JENNIE.TERRY@sakilacustomer.org</option><option value="JENNIFER.DAVIS@sakilacustomer.org" >JENNIFER.DAVIS@sakilacustomer.org</option><option value="JENNY.CASTRO@sakilacustomer.org" >JENNY.CASTRO@sakilacustomer.org</option><option value="JEREMY.HURTADO@sakilacustomer.org" >JEREMY.HURTADO@sakilacustomer.org</option><option value="JEROME.KENYON@sakilacustomer.org" >JEROME.KENYON@sakilacustomer.org</option><option value="JERRY.JORDON@sakilacustomer.org" >JERRY.JORDON@sakilacustomer.org</option><option value="JESSE.SCHILLING@sakilacustomer.org" >JESSE.SCHILLING@sakilacustomer.org</option><option value="JESSICA.HALL@sakilacustomer.org" >JESSICA.HALL@sakilacustomer.org</option><option value="JESSIE.BANKS@sakilacustomer.org" >JESSIE.BANKS@sakilacustomer.org</option><option value="JESSIE.MILAM@sakilacustomer.org" >JESSIE.MILAM@sakilacustomer.org</option><option value="JESUS.MCCARTNEY@sakilacustomer.org" >JESUS.MCCARTNEY@sakilacustomer.org</option><option value="JILL.HAWKINS@sakilacustomer.org" >JILL.HAWKINS@sakilacustomer.org</option><option value="JIM.REA@sakilacustomer.org" >JIM.REA@sakilacustomer.org</option><option value="JIMMIE.EGGLESTON@sakilacustomer.org" >JIMMIE.EGGLESTON@sakilacustomer.org</option><option value="JIMMY.SCHRADER@sakilacustomer.org" >JIMMY.SCHRADER@sakilacustomer.org</option><option value="JO.FOWLER@sakilacustomer.org" >JO.FOWLER@sakilacustomer.org</option><option value="JOAN.COOPER@sakilacustomer.org" >JOAN.COOPER@sakilacustomer.org</option><option value="JOANN.GARDNER@sakilacustomer.org" >JOANN.GARDNER@sakilacustomer.org</option><option value="JOANNE.ROBERTSON@sakilacustomer.org" >JOANNE.ROBERTSON@sakilacustomer.org</option><option value="JOE.GILLILAND@sakilacustomer.org" >JOE.GILLILAND@sakilacustomer.org</option><option value="JOEL.FRANCISCO@sakilacustomer.org" >JOEL.FRANCISCO@sakilacustomer.org</option><option value="JOHN.FARNSWORTH@sakilacustomer.org" >JOHN.FARNSWORTH@sakilacustomer.org</option><option value="JOHNNIE.CHISHOLM@sakilacustomer.org" >JOHNNIE.CHISHOLM@sakilacustomer.org</option><option value="JOHNNY.TURPIN@sakilacustomer.org" >JOHNNY.TURPIN@sakilacustomer.org</option><option value="JON.WILES@sakilacustomer.org" >JON.WILES@sakilacustomer.org</option><option value="JONATHAN.SCARBOROUGH@sakilacustomer.org" >JONATHAN.SCARBOROUGH@sakilacustomer.org</option><option value="JORDAN.ARCHULETA@sakilacustomer.org" >JORDAN.ARCHULETA@sakilacustomer.org</option><option value="JORGE.OLIVARES@sakilacustomer.org" >JORGE.OLIVARES@sakilacustomer.org</option><option value="JOSE.ANDREW@sakilacustomer.org" >JOSE.ANDREW@sakilacustomer.org</option><option value="JOSEPH.JOY@sakilacustomer.org" >JOSEPH.JOY@sakilacustomer.org</option><option value="JOSEPHINE.GOMEZ@sakilacustomer.org" >JOSEPHINE.GOMEZ@sakilacustomer.org</option><option value="JOSHUA.MARK@sakilacustomer.org" >JOSHUA.MARK@sakilacustomer.org</option><option value="JOY.GEORGE@sakilacustomer.org" >JOY.GEORGE@sakilacustomer.org</option><option value="JOYCE.EDWARDS@sakilacustomer.org" >JOYCE.EDWARDS@sakilacustomer.org</option><option value="JUAN.FRALEY@sakilacustomer.org" >JUAN.FRALEY@sakilacustomer.org</option><option value="JUANITA.MASON@sakilacustomer.org" >JUANITA.MASON@sakilacustomer.org</option><option value="JUDITH.COX@sakilacustomer.org" >JUDITH.COX@sakilacustomer.org</option><option value="JUDY.GRAY@sakilacustomer.org" >JUDY.GRAY@sakilacustomer.org</option><option value="JULIA.FLORES@sakilacustomer.org" >JULIA.FLORES@sakilacustomer.org</option><option value="JULIAN.VEST@sakilacustomer.org" >JULIAN.VEST@sakilacustomer.org</option><option value="JULIE.SANCHEZ@sakilacustomer.org" >JULIE.SANCHEZ@sakilacustomer.org</option><option value="JULIO.NOLAND@sakilacustomer.org" >JULIO.NOLAND@sakilacustomer.org</option><option value="JUNE.CARROLL@sakilacustomer.org" >JUNE.CARROLL@sakilacustomer.org</option><option value="JUSTIN.NGO@sakilacustomer.org" >JUSTIN.NGO@sakilacustomer.org</option><option value="KAREN.JACKSON@sakilacustomer.org" >KAREN.JACKSON@sakilacustomer.org</option><option value="KARL.SEAL@sakilacustomer.org" >KARL.SEAL@sakilacustomer.org</option><option value="KATHERINE.RIVERA@sakilacustomer.org" >KATHERINE.RIVERA@sakilacustomer.org</option><option value="KATHLEEN.ADAMS@sakilacustomer.org" >KATHLEEN.ADAMS@sakilacustomer.org</option><option value="KATHRYN.COLEMAN@sakilacustomer.org" >KATHRYN.COLEMAN@sakilacustomer.org</option><option value="KATHY.JAMES@sakilacustomer.org" >KATHY.JAMES@sakilacustomer.org</option><option value="KATIE.ELLIOTT@sakilacustomer.org" >KATIE.ELLIOTT@sakilacustomer.org</option><option value="KAY.CALDWELL@sakilacustomer.org" >KAY.CALDWELL@sakilacustomer.org</option><option value="KEITH.RICO@sakilacustomer.org" >KEITH.RICO@sakilacustomer.org</option><option value="KELLY.KNOTT@sakilacustomer.org" >KELLY.KNOTT@sakilacustomer.org</option><option value="KELLY.TORRES@sakilacustomer.org" >KELLY.TORRES@sakilacustomer.org</option><option value="KEN.PREWITT@sakilacustomer.org" >KEN.PREWITT@sakilacustomer.org</option><option value="KENNETH.GOODEN@sakilacustomer.org" >KENNETH.GOODEN@sakilacustomer.org</option><option value="KENT.ARSENAULT@sakilacustomer.org" >KENT.ARSENAULT@sakilacustomer.org</option><option value="KEVIN.SCHULER@sakilacustomer.org" >KEVIN.SCHULER@sakilacustomer.org</option><option value="KIM.CRUZ@sakilacustomer.org" >KIM.CRUZ@sakilacustomer.org</option><option value="KIMBERLY.LEE@sakilacustomer.org" >KIMBERLY.LEE@sakilacustomer.org</option><option value="KIRK.STCLAIR@sakilacustomer.org" >KIRK.STCLAIR@sakilacustomer.org</option><option value="KRISTEN.CHAVEZ@sakilacustomer.org" >KRISTEN.CHAVEZ@sakilacustomer.org</option><option value="KRISTIN.JOHNSTON@sakilacustomer.org" >KRISTIN.JOHNSTON@sakilacustomer.org</option><option value="KRISTINA.CHAMBERS@sakilacustomer.org" >KRISTINA.CHAMBERS@sakilacustomer.org</option><option value="KURT.EMMONS@sakilacustomer.org" >KURT.EMMONS@sakilacustomer.org</option><option value="KYLE.SPURLOCK@sakilacustomer.org" >KYLE.SPURLOCK@sakilacustomer.org</option><option value="LANCE.PEMBERTON@sakilacustomer.org" >LANCE.PEMBERTON@sakilacustomer.org</option><option value="LARRY.THRASHER@sakilacustomer.org" >LARRY.THRASHER@sakilacustomer.org</option><option value="LAURA.RODRIGUEZ@sakilacustomer.org" >LAURA.RODRIGUEZ@sakilacustomer.org</option><option value="LAUREN.HUDSON@sakilacustomer.org" >LAUREN.HUDSON@sakilacustomer.org</option><option value="LAURIE.LAWRENCE@sakilacustomer.org" >LAURIE.LAWRENCE@sakilacustomer.org</option><option value="LAWRENCE.LAWTON@sakilacustomer.org" >LAWRENCE.LAWTON@sakilacustomer.org</option><option value="LEAH.CURTIS@sakilacustomer.org" >LEAH.CURTIS@sakilacustomer.org</option><option value="LEE.HAWKS@sakilacustomer.org" >LEE.HAWKS@sakilacustomer.org</option><option value="LENA.JENSEN@sakilacustomer.org" >LENA.JENSEN@sakilacustomer.org</option><option value="LEO.EBERT@sakilacustomer.org" >LEO.EBERT@sakilacustomer.org</option><option value="LEON.BOSTIC@sakilacustomer.org" >LEON.BOSTIC@sakilacustomer.org</option><option value="LEONA.OBRIEN@sakilacustomer.org" >LEONA.OBRIEN@sakilacustomer.org</option><option value="LEONARD.SCHOFIELD@sakilacustomer.org" >LEONARD.SCHOFIELD@sakilacustomer.org</option><option value="LEROY.BUSTAMANTE@sakilacustomer.org" >LEROY.BUSTAMANTE@sakilacustomer.org</option><option value="LESLIE.GORDON@sakilacustomer.org" >LESLIE.GORDON@sakilacustomer.org</option><option value="LESLIE.SEWARD@sakilacustomer.org" >LESLIE.SEWARD@sakilacustomer.org</option><option value="LESTER.KRAUS@sakilacustomer.org" >LESTER.KRAUS@sakilacustomer.org</option><option value="LEWIS.LYMAN@sakilacustomer.org" >LEWIS.LYMAN@sakilacustomer.org</option><option value="LILLIAN.GRIFFIN@sakilacustomer.org" >LILLIAN.GRIFFIN@sakilacustomer.org</option><option value="LILLIE.KIM@sakilacustomer.org" >LILLIE.KIM@sakilacustomer.org</option><option value="LINDA.WILLIAMS@sakilacustomer.org" >LINDA.WILLIAMS@sakilacustomer.org</option><option value="LISA.ANDERSON@sakilacustomer.org" >LISA.ANDERSON@sakilacustomer.org</option><option value="LLOYD.DOWD@sakilacustomer.org" >LLOYD.DOWD@sakilacustomer.org</option><option value="LOIS.BUTLER@sakilacustomer.org" >LOIS.BUTLER@sakilacustomer.org</option><option value="LONNIE.TIRADO@sakilacustomer.org" >LONNIE.TIRADO@sakilacustomer.org</option><option value="LORETTA.CARPENTER@sakilacustomer.org" >LORETTA.CARPENTER@sakilacustomer.org</option><option value="LORI.WOOD@sakilacustomer.org" >LORI.WOOD@sakilacustomer.org</option><option value="LORRAINE.STEPHENS@sakilacustomer.org" >LORRAINE.STEPHENS@sakilacustomer.org</option><option value="LOUIS.LEONE@sakilacustomer.org" >LOUIS.LEONE@sakilacustomer.org</option><option value="LOUISE.JENKINS@sakilacustomer.org" >LOUISE.JENKINS@sakilacustomer.org</option><option value="LUCILLE.HOLMES@sakilacustomer.org" >LUCILLE.HOLMES@sakilacustomer.org</option><option value="LUCY.WHEELER@sakilacustomer.org" >LUCY.WHEELER@sakilacustomer.org</option><option value="LUIS.YANEZ@sakilacustomer.org" >LUIS.YANEZ@sakilacustomer.org</option><option value="LYDIA.BURKE@sakilacustomer.org" >LYDIA.BURKE@sakilacustomer.org</option><option value="LYNN.PAYNE@sakilacustomer.org" >LYNN.PAYNE@sakilacustomer.org</option><option value="MABEL.HOLLAND@sakilacustomer.org" >MABEL.HOLLAND@sakilacustomer.org</option><option value="MAE.FLETCHER@sakilacustomer.org" >MAE.FLETCHER@sakilacustomer.org</option><option value="MANUEL.MURRELL@sakilacustomer.org" >MANUEL.MURRELL@sakilacustomer.org</option><option value="MARC.OUTLAW@sakilacustomer.org" >MARC.OUTLAW@sakilacustomer.org</option><option value="MARCIA.DEAN@sakilacustomer.org" >MARCIA.DEAN@sakilacustomer.org</option><option value="MARCUS.HIDALGO@sakilacustomer.org" >MARCUS.HIDALGO@sakilacustomer.org</option><option value="MARGARET.MOORE@sakilacustomer.org" >MARGARET.MOORE@sakilacustomer.org</option><option value="MARGIE.WADE@sakilacustomer.org" >MARGIE.WADE@sakilacustomer.org</option><option value="MARIA.MILLER@sakilacustomer.org" >MARIA.MILLER@sakilacustomer.org</option><option value="MARIAN.MENDOZA@sakilacustomer.org" >MARIAN.MENDOZA@sakilacustomer.org</option><option value="MARIE.TURNER@sakilacustomer.org" >MARIE.TURNER@sakilacustomer.org</option><option value="MARILYN.ROSS@sakilacustomer.org" >MARILYN.ROSS@sakilacustomer.org</option><option value="MARIO.CHEATHAM@sakilacustomer.org" >MARIO.CHEATHAM@sakilacustomer.org</option><option value="MARION.OCAMPO@sakilacustomer.org" >MARION.OCAMPO@sakilacustomer.org</option><option value="MARION.SNYDER@sakilacustomer.org" >MARION.SNYDER@sakilacustomer.org</option><option value="MARJORIE.TUCKER@sakilacustomer.org" >MARJORIE.TUCKER@sakilacustomer.org</option><option value="MARK.RINEHART@sakilacustomer.org" >MARK.RINEHART@sakilacustomer.org</option><option value="MARLENE.WELCH@sakilacustomer.org" >MARLENE.WELCH@sakilacustomer.org</option><option value="MARSHA.DOUGLAS@sakilacustomer.org" >MARSHA.DOUGLAS@sakilacustomer.org</option><option value="MARSHALL.THORN@sakilacustomer.org" >MARSHALL.THORN@sakilacustomer.org</option><option value="MARTHA.GONZALEZ@sakilacustomer.org" >MARTHA.GONZALEZ@sakilacustomer.org</option><option value="MARTIN.BALES@sakilacustomer.org" >MARTIN.BALES@sakilacustomer.org</option><option value="MARVIN.YEE@sakilacustomer.org" >MARVIN.YEE@sakilacustomer.org</option><option value="MARY.SMITH@sakilacustomer.org" >MARY.SMITH@sakilacustomer.org</option><option value="MATHEW.BOLIN@sakilacustomer.org" >MATHEW.BOLIN@sakilacustomer.org</option><option value="MATTHEW.MAHAN@sakilacustomer.org" >MATTHEW.MAHAN@sakilacustomer.org</option><option value="MATTIE.HOFFMAN@sakilacustomer.org" >MATTIE.HOFFMAN@sakilacustomer.org</option><option value="MAUREEN.LITTLE@sakilacustomer.org" >MAUREEN.LITTLE@sakilacustomer.org</option><option value="MAURICE.CRAWLEY@sakilacustomer.org" >MAURICE.CRAWLEY@sakilacustomer.org</option><option value="MAX.PITT@sakilacustomer.org" >MAX.PITT@sakilacustomer.org</option><option value="MAXINE.SILVA@sakilacustomer.org" >MAXINE.SILVA@sakilacustomer.org</option><option value="MEGAN.PALMER@sakilacustomer.org" >MEGAN.PALMER@sakilacustomer.org</option><option value="MELANIE.ARMSTRONG@sakilacustomer.org" >MELANIE.ARMSTRONG@sakilacustomer.org</option><option value="MELINDA.FERNANDEZ@sakilacustomer.org" >MELINDA.FERNANDEZ@sakilacustomer.org</option><option value="MELISSA.KING@sakilacustomer.org" >MELISSA.KING@sakilacustomer.org</option><option value="MELVIN.ELLINGTON@sakilacustomer.org" >MELVIN.ELLINGTON@sakilacustomer.org</option><option value="MICHAEL.SILVERMAN@sakilacustomer.org" >MICHAEL.SILVERMAN@sakilacustomer.org</option><option value="MICHEAL.FORMAN@sakilacustomer.org" >MICHEAL.FORMAN@sakilacustomer.org</option><option value="MICHELE.GRANT@sakilacustomer.org" >MICHELE.GRANT@sakilacustomer.org</option><option value="MICHELLE.CLARK@sakilacustomer.org" >MICHELLE.CLARK@sakilacustomer.org</option><option value="MIGUEL.BETANCOURT@sakilacustomer.org" >MIGUEL.BETANCOURT@sakilacustomer.org</option><option value="MIKE.WAY@sakilacustomer.org" >MIKE.WAY@sakilacustomer.org</option><option value="MILDRED.BAILEY@sakilacustomer.org" >MILDRED.BAILEY@sakilacustomer.org</option><option value="MILTON.HOWLAND@sakilacustomer.org" >MILTON.HOWLAND@sakilacustomer.org</option><option value="MINNIE.ROMERO@sakilacustomer.org" >MINNIE.ROMERO@sakilacustomer.org</option><option value="MIRIAM.MCKINNEY@sakilacustomer.org" >MIRIAM.MCKINNEY@sakilacustomer.org</option><option value="MISTY.LAMBERT@sakilacustomer.org" >MISTY.LAMBERT@sakilacustomer.org</option><option value="MITCHELL.WESTMORELAND@sakilacustomer.org" >MITCHELL.WESTMORELAND@sakilacustomer.org</option><option value="MONICA.HICKS@sakilacustomer.org" >MONICA.HICKS@sakilacustomer.org</option><option value="MORRIS.MCCARTER@sakilacustomer.org" >MORRIS.MCCARTER@sakilacustomer.org</option><option value="MYRTLE.FLEMING@sakilacustomer.org" >MYRTLE.FLEMING@sakilacustomer.org</option><option value="NANCY.THOMAS@sakilacustomer.org" >NANCY.THOMAS@sakilacustomer.org</option><option value="NAOMI.JENNINGS@sakilacustomer.org" >NAOMI.JENNINGS@sakilacustomer.org</option><option value="NATALIE.MEYER@sakilacustomer.org" >NATALIE.MEYER@sakilacustomer.org</option><option value="NATHAN.RUNYON@sakilacustomer.org" >NATHAN.RUNYON@sakilacustomer.org</option><option value="NATHANIEL.ADAM@sakilacustomer.org" >NATHANIEL.ADAM@sakilacustomer.org</option><option value="NEIL.RENNER@sakilacustomer.org" >NEIL.RENNER@sakilacustomer.org</option><option value="NELLIE.GARRETT@sakilacustomer.org" >NELLIE.GARRETT@sakilacustomer.org</option><option value="NELSON.CHRISTENSON@sakilacustomer.org" >NELSON.CHRISTENSON@sakilacustomer.org</option><option value="NICHOLAS.BARFIELD@sakilacustomer.org" >NICHOLAS.BARFIELD@sakilacustomer.org</option><option value="NICOLE.PETERSON@sakilacustomer.org" >NICOLE.PETERSON@sakilacustomer.org</option><option value="NINA.SOTO@sakilacustomer.org" >NINA.SOTO@sakilacustomer.org</option><option value="NORA.HERRERA@sakilacustomer.org" >NORA.HERRERA@sakilacustomer.org</option><option value="NORMA.GONZALES@sakilacustomer.org" >NORMA.GONZALES@sakilacustomer.org</option><option value="NORMAN.CURRIER@sakilacustomer.org" >NORMAN.CURRIER@sakilacustomer.org</option><option value="OLGA.JIMENEZ@sakilacustomer.org" >OLGA.JIMENEZ@sakilacustomer.org</option><option value="OSCAR.AQUINO@sakilacustomer.org" >OSCAR.AQUINO@sakilacustomer.org</option><option value="PAMELA.BAKER@sakilacustomer.org" >PAMELA.BAKER@sakilacustomer.org</option><option value="PATRICIA.JOHNSON@sakilacustomer.org" >PATRICIA.JOHNSON@sakilacustomer.org</option><option value="PATRICK.NEWSOM@sakilacustomer.org" >PATRICK.NEWSOM@sakilacustomer.org</option><option value="PATSY.DAVIDSON@sakilacustomer.org" >PATSY.DAVIDSON@sakilacustomer.org</option><option value="PAUL.TROUT@sakilacustomer.org" >PAUL.TROUT@sakilacustomer.org</option><option value="PAULA.BRYANT@sakilacustomer.org" >PAULA.BRYANT@sakilacustomer.org</option><option value="PAULINE.HENRY@sakilacustomer.org" >PAULINE.HENRY@sakilacustomer.org</option><option value="PEARL.GARZA@sakilacustomer.org" >PEARL.GARZA@sakilacustomer.org</option><option value="PEDRO.CHESTNUT@sakilacustomer.org" >PEDRO.CHESTNUT@sakilacustomer.org</option><option value="PEGGY.MYERS@sakilacustomer.org" >PEGGY.MYERS@sakilacustomer.org</option><option value="PENNY.NEAL@sakilacustomer.org" >PENNY.NEAL@sakilacustomer.org</option><option value="PERRY.SWAFFORD@sakilacustomer.org" >PERRY.SWAFFORD@sakilacustomer.org</option><option value="PETER.MENARD@sakilacustomer.org" >PETER.MENARD@sakilacustomer.org</option><option value="PHILIP.CAUSEY@sakilacustomer.org" >PHILIP.CAUSEY@sakilacustomer.org</option><option value="PHILLIP.HOLM@sakilacustomer.org" >PHILLIP.HOLM@sakilacustomer.org</option><option value="PHYLLIS.FOSTER@sakilacustomer.org" >PHYLLIS.FOSTER@sakilacustomer.org</option><option value="PRISCILLA.LOWE@sakilacustomer.org" >PRISCILLA.LOWE@sakilacustomer.org</option><option value="RACHEL.BARNES@sakilacustomer.org" >RACHEL.BARNES@sakilacustomer.org</option><option value="RAFAEL.ABNEY@sakilacustomer.org" >RAFAEL.ABNEY@sakilacustomer.org</option><option value="RALPH.MADRIGAL@sakilacustomer.org" >RALPH.MADRIGAL@sakilacustomer.org</option><option value="RAMON.CHOATE@sakilacustomer.org" >RAMON.CHOATE@sakilacustomer.org</option><option value="RAMONA.HALE@sakilacustomer.org" >RAMONA.HALE@sakilacustomer.org</option><option value="RANDALL.NEUMANN@sakilacustomer.org" >RANDALL.NEUMANN@sakilacustomer.org</option><option value="RANDY.GAITHER@sakilacustomer.org" >RANDY.GAITHER@sakilacustomer.org</option><option value="RAUL.FORTIER@sakilacustomer.org" >RAUL.FORTIER@sakilacustomer.org</option><option value="RAY.HOULE@sakilacustomer.org" >RAY.HOULE@sakilacustomer.org</option><option value="RAYMOND.MCWHORTER@sakilacustomer.org" >RAYMOND.MCWHORTER@sakilacustomer.org</option><option value="REBECCA.SCOTT@sakilacustomer.org" >REBECCA.SCOTT@sakilacustomer.org</option><option value="REGINA.BERRY@sakilacustomer.org" >REGINA.BERRY@sakilacustomer.org</option><option value="REGINALD.KINDER@sakilacustomer.org" >REGINALD.KINDER@sakilacustomer.org</option><option value="RENE.MCALISTER@sakilacustomer.org" >RENE.MCALISTER@sakilacustomer.org</option><option value="RENEE.LANE@sakilacustomer.org" >RENEE.LANE@sakilacustomer.org</option><option value="RHONDA.KENNEDY@sakilacustomer.org" >RHONDA.KENNEDY@sakilacustomer.org</option><option value="RICARDO.MEADOR@sakilacustomer.org" >RICARDO.MEADOR@sakilacustomer.org</option><option value="RICHARD.MCCRARY@sakilacustomer.org" >RICHARD.MCCRARY@sakilacustomer.org</option><option value="RICK.MATTOX@sakilacustomer.org" >RICK.MATTOX@sakilacustomer.org</option><option value="RICKY.SHELBY@sakilacustomer.org" >RICKY.SHELBY@sakilacustomer.org</option><option value="RITA.GRAHAM@sakilacustomer.org" >RITA.GRAHAM@sakilacustomer.org</option><option value="ROBERT.BAUGHMAN@sakilacustomer.org" >ROBERT.BAUGHMAN@sakilacustomer.org</option><option value="ROBERTA.HARPER@sakilacustomer.org" >ROBERTA.HARPER@sakilacustomer.org</option><option value="ROBERTO.VU@sakilacustomer.org" >ROBERTO.VU@sakilacustomer.org</option><option value="ROBIN.HAYES@sakilacustomer.org" >ROBIN.HAYES@sakilacustomer.org</option><option value="RODNEY.MOELLER@sakilacustomer.org" >RODNEY.MOELLER@sakilacustomer.org</option><option value="ROGER.QUINTANILLA@sakilacustomer.org" >ROGER.QUINTANILLA@sakilacustomer.org</option><option value="ROLAND.SOUTH@sakilacustomer.org" >ROLAND.SOUTH@sakilacustomer.org</option><option value="RON.DELUCA@sakilacustomer.org" >RON.DELUCA@sakilacustomer.org</option><option value="RONALD.WEINER@sakilacustomer.org" >RONALD.WEINER@sakilacustomer.org</option><option value="RONNIE.RICKETTS@sakilacustomer.org" >RONNIE.RICKETTS@sakilacustomer.org</option><option value="ROSA.REYNOLDS@sakilacustomer.org" >ROSA.REYNOLDS@sakilacustomer.org</option><option value="ROSE.HOWARD@sakilacustomer.org" >ROSE.HOWARD@sakilacustomer.org</option><option value="ROSEMARY.SCHMIDT@sakilacustomer.org" >ROSEMARY.SCHMIDT@sakilacustomer.org</option><option value="ROSS.GREY@sakilacustomer.org" >ROSS.GREY@sakilacustomer.org</option><option value="ROY.WHITING@sakilacustomer.org" >ROY.WHITING@sakilacustomer.org</option><option value="RUBEN.GEARY@sakilacustomer.org" >RUBEN.GEARY@sakilacustomer.org</option><option value="RUBY.WASHINGTON@sakilacustomer.org" >RUBY.WASHINGTON@sakilacustomer.org</option><option value="RUSSELL.BRINSON@sakilacustomer.org" >RUSSELL.BRINSON@sakilacustomer.org</option><option value="RUTH.MARTINEZ@sakilacustomer.org" >RUTH.MARTINEZ@sakilacustomer.org</option><option value="RYAN.SALISBURY@sakilacustomer.org" >RYAN.SALISBURY@sakilacustomer.org</option><option value="SALLY.PIERCE@sakilacustomer.org" >SALLY.PIERCE@sakilacustomer.org</option><option value="SALVADOR.TEEL@sakilacustomer.org" >SALVADOR.TEEL@sakilacustomer.org</option><option value="SAM.MCDUFFIE@sakilacustomer.org" >SAM.MCDUFFIE@sakilacustomer.org</option><option value="SAMANTHA.DUNCAN@sakilacustomer.org" >SAMANTHA.DUNCAN@sakilacustomer.org</option><option value="SAMUEL.MARLOW@sakilacustomer.org" >SAMUEL.MARLOW@sakilacustomer.org</option><option value="SANDRA.MARTIN@sakilacustomer.org" >SANDRA.MARTIN@sakilacustomer.org</option><option value="SARA.PERRY@sakilacustomer.org" >SARA.PERRY@sakilacustomer.org</option><option value="SARAH.LEWIS@sakilacustomer.org" >SARAH.LEWIS@sakilacustomer.org</option><option value="SCOTT.SHELLEY@sakilacustomer.org" >SCOTT.SHELLEY@sakilacustomer.org</option><option value="SEAN.DOUGLASS@sakilacustomer.org" >SEAN.DOUGLASS@sakilacustomer.org</option><option value="SERGIO.STANFIELD@sakilacustomer.org" >SERGIO.STANFIELD@sakilacustomer.org</option><option value="SETH.HANNON@sakilacustomer.org" >SETH.HANNON@sakilacustomer.org</option><option value="SHANE.MILLARD@sakilacustomer.org" >SHANE.MILLARD@sakilacustomer.org</option><option value="SHANNON.FREEMAN@sakilacustomer.org" >SHANNON.FREEMAN@sakilacustomer.org</option><option value="SHARON.ROBINSON@sakilacustomer.org" >SHARON.ROBINSON@sakilacustomer.org</option><option value="SHAWN.HEATON@sakilacustomer.org" >SHAWN.HEATON@sakilacustomer.org</option><option value="SHEILA.WELLS@sakilacustomer.org" >SHEILA.WELLS@sakilacustomer.org</option><option value="SHELLY.WATTS@sakilacustomer.org" >SHELLY.WATTS@sakilacustomer.org</option><option value="SHERRI.RHODES@sakilacustomer.org" >SHERRI.RHODES@sakilacustomer.org</option><option value="SHERRY.MARSHALL@sakilacustomer.org" >SHERRY.MARSHALL@sakilacustomer.org</option><option value="SHIRLEY.ALLEN@sakilacustomer.org" >SHIRLEY.ALLEN@sakilacustomer.org</option><option value="SIDNEY.BURLESON@sakilacustomer.org" >SIDNEY.BURLESON@sakilacustomer.org</option><option value="SONIA.GREGORY@sakilacustomer.org" >SONIA.GREGORY@sakilacustomer.org</option><option value="STACEY.MONTGOMERY@sakilacustomer.org" >STACEY.MONTGOMERY@sakilacustomer.org</option><option value="STACY.CUNNINGHAM@sakilacustomer.org" >STACY.CUNNINGHAM@sakilacustomer.org</option><option value="STANLEY.SCROGGINS@sakilacustomer.org" >STANLEY.SCROGGINS@sakilacustomer.org</option><option value="STELLA.MORENO@sakilacustomer.org" >STELLA.MORENO@sakilacustomer.org</option><option value="STEPHANIE.MITCHELL@sakilacustomer.org" >STEPHANIE.MITCHELL@sakilacustomer.org</option><option value="STEPHEN.QUALLS@sakilacustomer.org" >STEPHEN.QUALLS@sakilacustomer.org</option><option value="STEVE.MACKENZIE@sakilacustomer.org" >STEVE.MACKENZIE@sakilacustomer.org</option><option value="STEVEN.CURLEY@sakilacustomer.org" >STEVEN.CURLEY@sakilacustomer.org</option><option value="SUE.PETERS@sakilacustomer.org" >SUE.PETERS@sakilacustomer.org</option><option value="SUSAN.WILSON@sakilacustomer.org" >SUSAN.WILSON@sakilacustomer.org</option><option value="SUZANNE.NICHOLS@sakilacustomer.org" >SUZANNE.NICHOLS@sakilacustomer.org</option><option value="SYLVIA.ORTIZ@sakilacustomer.org" >SYLVIA.ORTIZ@sakilacustomer.org</option><option value="TAMARA.NGUYEN@sakilacustomer.org" >TAMARA.NGUYEN@sakilacustomer.org</option><option value="TAMMY.SANDERS@sakilacustomer.org" >TAMMY.SANDERS@sakilacustomer.org</option><option value="TANYA.GILBERT@sakilacustomer.org" >TANYA.GILBERT@sakilacustomer.org</option><option value="TARA.RYAN@sakilacustomer.org" >TARA.RYAN@sakilacustomer.org</option><option value="TED.BREAUX@sakilacustomer.org" >TED.BREAUX@sakilacustomer.org</option><option value="TERESA.ROGERS@sakilacustomer.org" >TERESA.ROGERS@sakilacustomer.org</option><option value="TERRANCE.ROUSH@sakilacustomer.org" >TERRANCE.ROUSH@sakilacustomer.org</option><option value="TERRENCE.GUNDERSON@sakilacustomer.org" >TERRENCE.GUNDERSON@sakilacustomer.org</option><option value="TERRI.VASQUEZ@sakilacustomer.org" >TERRI.VASQUEZ@sakilacustomer.org</option><option value="TERRY.CARLSON@sakilacustomer.org" >TERRY.CARLSON@sakilacustomer.org</option><option value="TERRY.GRISSOM@sakilacustomer.org" >TERRY.GRISSOM@sakilacustomer.org</option><option value="THELMA.MURRAY@sakilacustomer.org" >THELMA.MURRAY@sakilacustomer.org</option><option value="THEODORE.CULP@sakilacustomer.org" >THEODORE.CULP@sakilacustomer.org</option><option value="THERESA.WATSON@sakilacustomer.org" >THERESA.WATSON@sakilacustomer.org</option><option value="THOMAS.GRIGSBY@sakilacustomer.org" >THOMAS.GRIGSBY@sakilacustomer.org</option><option value="TIFFANY.JORDAN@sakilacustomer.org" >TIFFANY.JORDAN@sakilacustomer.org</option><option value="TIM.CARY@sakilacustomer.org" >TIM.CARY@sakilacustomer.org</option><option value="TIMOTHY.BUNN@sakilacustomer.org" >TIMOTHY.BUNN@sakilacustomer.org</option><option value="TINA.SIMMONS@sakilacustomer.org" >TINA.SIMMONS@sakilacustomer.org</option><option value="TODD.TAN@sakilacustomer.org" >TODD.TAN@sakilacustomer.org</option><option value="TOM.MILNER@sakilacustomer.org" >TOM.MILNER@sakilacustomer.org</option><option value="TOMMY.COLLAZO@sakilacustomer.org" >TOMMY.COLLAZO@sakilacustomer.org</option><option value="TONI.HOLT@sakilacustomer.org" >TONI.HOLT@sakilacustomer.org</option><option value="TONY.CARRANZA@sakilacustomer.org" >TONY.CARRANZA@sakilacustomer.org</option><option value="TONYA.CHAPMAN@sakilacustomer.org" >TONYA.CHAPMAN@sakilacustomer.org</option><option value="TRACEY.BARRETT@sakilacustomer.org" >TRACEY.BARRETT@sakilacustomer.org</option><option value="TRACY.COLE@sakilacustomer.org" >TRACY.COLE@sakilacustomer.org</option><option value="TRACY.HERRMANN@sakilacustomer.org" >TRACY.HERRMANN@sakilacustomer.org</option><option value="TRAVIS.ESTEP@sakilacustomer.org" >TRAVIS.ESTEP@sakilacustomer.org</option><option value="TROY.QUIGLEY@sakilacustomer.org" >TROY.QUIGLEY@sakilacustomer.org</option><option value="TYLER.WREN@sakilacustomer.org" >TYLER.WREN@sakilacustomer.org</option><option value="TYRONE.ASHER@sakilacustomer.org" >TYRONE.ASHER@sakilacustomer.org</option><option value="VALERIE.BLACK@sakilacustomer.org" >VALERIE.BLACK@sakilacustomer.org</option><option value="VANESSA.SIMS@sakilacustomer.org" >VANESSA.SIMS@sakilacustomer.org</option><option value="VELMA.LUCAS@sakilacustomer.org" >VELMA.LUCAS@sakilacustomer.org</option><option value="VERA.MCCOY@sakilacustomer.org" >VERA.MCCOY@sakilacustomer.org</option><option value="VERNON.CHAPA@sakilacustomer.org" >VERNON.CHAPA@sakilacustomer.org</option><option value="VERONICA.STONE@sakilacustomer.org" >VERONICA.STONE@sakilacustomer.org</option><option value="VICKI.FIELDS@sakilacustomer.org" >VICKI.FIELDS@sakilacustomer.org</option><option value="VICKIE.BREWER@sakilacustomer.org" >VICKIE.BREWER@sakilacustomer.org</option><option value="VICTOR.BARKLEY@sakilacustomer.org" >VICTOR.BARKLEY@sakilacustomer.org</option><option value="VICTORIA.GIBSON@sakilacustomer.org" >VICTORIA.GIBSON@sakilacustomer.org</option><option value="VINCENT.RALSTON@sakilacustomer.org" >VINCENT.RALSTON@sakilacustomer.org</option><option value="VIOLA.HANSON@sakilacustomer.org" >VIOLA.HANSON@sakilacustomer.org</option><option value="VIOLET.RODRIQUEZ@sakilacustomer.org" >VIOLET.RODRIQUEZ@sakilacustomer.org</option><option value="VIRGIL.WOFFORD@sakilacustomer.org" >VIRGIL.WOFFORD@sakilacustomer.org</option><option value="VIRGINIA.GREEN@sakilacustomer.org" >VIRGINIA.GREEN@sakilacustomer.org</option><option value="VIVIAN.RUIZ@sakilacustomer.org" >VIVIAN.RUIZ@sakilacustomer.org</option><option value="WADE.DELVALLE@sakilacustomer.org" >WADE.DELVALLE@sakilacustomer.org</option><option value="WALLACE.SLONE@sakilacustomer.org" >WALLACE.SLONE@sakilacustomer.org</option><option value="WALTER.PERRYMAN@sakilacustomer.org" >WALTER.PERRYMAN@sakilacustomer.org</option><option value="WANDA.PATTERSON@sakilacustomer.org" >WANDA.PATTERSON@sakilacustomer.org</option><option value="WARREN.SHERROD@sakilacustomer.org" >WARREN.SHERROD@sakilacustomer.org</option><option value="WAYNE.TRUONG@sakilacustomer.org" >WAYNE.TRUONG@sakilacustomer.org</option><option value="WENDY.HARRISON@sakilacustomer.org" >WENDY.HARRISON@sakilacustomer.org</option><option value="WESLEY.BULL@sakilacustomer.org" >WESLEY.BULL@sakilacustomer.org</option><option value="WILLARD.LUMPKIN@sakilacustomer.org" >WILLARD.LUMPKIN@sakilacustomer.org</option><option value="WILLIAM.SATTERFIELD@sakilacustomer.org" >WILLIAM.SATTERFIELD@sakilacustomer.org</option><option value="WILLIE.HOWELL@sakilacustomer.org" >WILLIE.HOWELL@sakilacustomer.org</option><option value="WILLIE.MARKHAM@sakilacustomer.org" >WILLIE.MARKHAM@sakilacustomer.org</option><option value="WILMA.RICHARDS@sakilacustomer.org" >WILMA.RICHARDS@sakilacustomer.org</option><option value="YOLANDA.WEAVER@sakilacustomer.org" >YOLANDA.WEAVER@sakilacustomer.org</option><option value="YVONNE.WATKINS@sakilacustomer.org" >YVONNE.WATKINS@sakilacustomer.org</option><option value="ZACHARY.HITE@sakilacustomer.org" >ZACHARY.HITE@sakilacustomer.org</option></select></div><div class="row gx-0 mb-3"><label for="customer_filter_active" class="form-label">Active</label><select id="customer_filter_active" name="customer_filter_active" class="form-select-sm form-select" data-slimselect="true" data-allow-deselect="true" data-allow-deselect-option="true" data-placeholder="Select ..."><option value=""  selected="selected" label="Select" data-placeholder="true"></option><option value="0" >-</option><option value="1" >1</option></select></div><span class="d-block mb-4"></span><div class="mb-3 phpfb-centered"><div class="btn-group"><button type="submit" name="cancel_filters" value="1" class="btn btn-sm btn-warning"><i class="fas fa-rotate-left prepend"></i>Reset</button><button type="submit" name="submit_filters" value="1" class="btn btn-sm btn-primary">Filter<i class="fas fa-arrow-down-wide-short append"></i></button></div></div></fieldset></form></div>

                                                                                                </li>
                        </ul>
        <!-- /Nav -->
        </div>
        <!-- /Category Content -->
                    </div>
    <!-- /Sidebar Category -->
                <div id="customerData" class="sidebar-category active">
                    <div class="category-title nav-link">
            <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#sidebarCustomerDataNav" role="button" aria-expanded="true" aria-controls="sidebarCustomerDataNav">Customer data</a>
        </div>
                                                            <div class="category-content collapse show" id="sidebarCustomerDataNav">
                            
            <ul class="navbar-nav flex-column py-0">
                                                <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/customer" title="Customer"  class="nav-link d-flex align-items-center active">
                                                                <i class="fa-solid fa-circle-user text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Customer</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/address" title="Address"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-address-book text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Address</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/city" title="City"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-city text-gray fa-lg me-3"></i>
                                            <span class="nav-text">City</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/country" title="Country"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-earth-europe text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Country</span>
                                        </a>
                                                                                                </li>
                        </ul>
        <!-- /Nav -->
        </div>
        <!-- /Category Content -->
                    </div>
    <!-- /Sidebar Category -->
                <div id="inventory" class="sidebar-category">
                    <div class="category-title nav-link">
            <a class="nav-link dropdown-toggle collapsed" data-bs-toggle="collapse" href="#sidebarInventoryNav" role="button" aria-expanded="false" aria-controls="sidebarInventoryNav">Inventory</a>
        </div>
                                                            <div class="category-content collapse" id="sidebarInventoryNav">
                            
            <ul class="navbar-nav flex-column py-0">
                                                <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/actor" title="Actor"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-camera text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Actor</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/film" title="Film"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-film text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Film</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/filmactor" title="Film actor"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-user-tag text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Film actor</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/category" title="Category"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-thumbtack text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Category</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/filmcategory" title="Film category"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-tags text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Film category</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/language" title="Language"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-language text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Language</span>
                                        </a>
                                                                                                </li>
                        </ul>
        <!-- /Nav -->
        </div>
        <!-- /Category Content -->
                    </div>
    <!-- /Sidebar Category -->
                <div id="business" class="sidebar-category">
                    <div class="category-title nav-link">
            <a class="nav-link dropdown-toggle collapsed" data-bs-toggle="collapse" href="#sidebarBusinessNav" role="button" aria-expanded="false" aria-controls="sidebarBusinessNav">Business</a>
        </div>
                                                            <div class="category-content collapse" id="sidebarBusinessNav">
                            
            <ul class="navbar-nav flex-column py-0">
                                                <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/store" title="Store"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-store text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Store</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/payment" title="Payment"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-money-bill-1-wave text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Payment</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/rental" title="Rental"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-calendar-days text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Rental</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/inventory" title="Inventory"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-calculator text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Inventory</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/staff" title="Staff"  class="nav-link d-flex align-items-center">
                                                                <i class="fas fa-pencil-alt text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Staff</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/phpcgusersprofiles" title="Phpcg users profiles"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-user-shield text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Phpcg users profiles</span>
                                        </a>
                                                                                                </li>
                            <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/phpcgusers" title="Phpcg users"  class="nav-link d-flex align-items-center">
                                                                <i class="fa-solid fa-user text-gray fa-lg me-3"></i>
                                            <span class="nav-text">Phpcg users</span>
                                        </a>
                                                                                                </li>
                        </ul>
        <!-- /Nav -->
        </div>
        <!-- /Category Content -->
                    </div>
    <!-- /Sidebar Category -->
                <!-- /main sidebar -->
</nav>
        <div id="content-wrapper">
            <nav id="navbar-main" class="navbar navbar-expand-md shadow bg-secondary">
    <button class="sidebar-toggler btn btn-lg px-2 d-flex align-items-center shadow-none mx-2"><i class="navbar-toggler-icon"></i></button>

    <ul class="navbar-nav mx-auto">
        <li class="nav-item text-center">
            <span class="navbar-text-active">PHP CRUD GENERATOR<br><span class="navbar-text">Admin dashboard</span></span>
        </li>
    </ul>

    <ul class="navbar-nav flex-row">
                <li class="nav-item d-flex align-items-center" data-bs-toggle="tooltip" data-bs-title="Customise the theme and navigation bars">
            <a class="nav-link" id="style-switcher-btn" data-bs-toggle="offcanvas" href="#style-switcher-wrapper" role="button" aria-controls="style-switcher-wrapper"><i class="fas fa-palette fa-xl"></i></a>
        </li>
                <li class="nav-item d-flex align-items-center me-4">
            <a class="nav-link" id="fullscreen-btn" data-bs-toggle="tooltip" data-bs-title="Toggle full screen" href="#"><i class="fas fa-expand fa-xl"></i></a>
        </li>
        <li class="nav-item py-2 me-4">
                        <span class="navbar-text-active">John Doe</span>
            <br>
            <span class="navbar-text">Admin</span>
                    </li>
        <li class="nav-item d-flex align-items-center dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbar-user-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user me-4"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbar-user-dropdown">
                <li><a class="dropdown-item" href="https://www.phpcrudgenerator.com/admin/logout" rel="nofollow"><i class="fas fa-power-off pull-right"></i> Log Out</a></li>
            </ul>
        </li>
    </ul>
</nav>
<nav id="breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://www.phpcrudgenerator.com/admin/home"><i class="fas fa-house-chimney"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Customer</li>
            </ol>
</nav>            <!-- shows all the user messages -->
            <div id="msg" class="mx-4"></div>
            <div class="px-4">
            <div id="debug-content"></div>
            <div id="toolbar" class="d-lg-flex flex-wrap justify-content-between">
        
        <div class="d-flex ms-auto order-lg-2">
            <form id="npp-form" action="/admin/customer" method="post">
    <div class="hstack gap-3">
        <label class="form-label pe-2 mb-0">Results</label>
        <select name="npp" id="npp" class="form-select form-select-sm pe-5" data-slimselect="true" data-show-search="false">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20" selected>20</option>
            <option value="50">50</option>
            <option value="100">100</option>
            <option value="200">200</option>
            <option value="10000">All</option>
        </select>
    </div>
</form>

        </div>

        <hr class="w-100 d-lg-none">

                <div class="d-flex order-lg-0 mb-3">
                        <a href="https://www.phpcrudgenerator.com/admin/customer/create" class="btn btn-sm me-1 btn-primary d-flex align-items-center"><i class="fas fa-circle-plus prepend"></i>Add new</a>
                                            <div class="btn-group heading-btn">
    <button type="button" class="btn text-bg-light btn-sm dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-upload prepend"></i>Export</button>
    <ul class="dropdown-menu">
<li><a class="dropdown-item" href="https://www.phpcrudgenerator.com/admin/inc/export-data.php?table=customer&amp;npp=20&p=1" target="_blank">Current view</a></li>
<li><a class="dropdown-item" href="https://www.phpcrudgenerator.com/admin/inc/export-data.php?table=customer&amp;npp=-1&p=1" target="_blank">All records</a></li>
    </ul>
</div>

                        </div>

        <div class="order-lg-1 mx-lg-auto">
            <form name="rp-search-form" id="rp-search-form" action="" class="form-inline justify-content-center">
                <div class="input-group input-group-sm">
                    <button class="input-group-text btn text-bg-light dropdown-toggle ps-4 pe-3" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                    <ul id="rp-search-field" class="dropdown-menu">
                                                                                                <li><a class="dropdown-item" href="#" rel="noindex" data-value="customer_id">Customer id</a></li>
                                                                                                <li><a class="dropdown-item" href="#" rel="noindex" data-value="store_id">Store</a></li>
                                                                                                <li><a class="dropdown-item" href="#" rel="noindex" data-value="first_name">First name</a></li>
                                                                                                                                                <li><a class="dropdown-item active" href="#" rel="noindex" data-value="last_name">Last name</a></li>
                                                                                                <li><a class="dropdown-item" href="#" rel="noindex" data-value="email">Email</a></li>
                                                                                                <li><a class="dropdown-item" href="#" rel="noindex" data-value="address_id">Address</a></li>
                                                                                                <li><a class="dropdown-item" href="#" rel="noindex" data-value="active">Active</a></li>
                                                                                                <li><a class="dropdown-item" href="#" rel="noindex" data-value="create_date">Create date</a></li>
                                                                                                <li><a class="dropdown-item" href="#" rel="noindex" data-value="last_update">Last update</a></li>
                                            </ul>
                                                            <input id="rp-search" name="rp-search" type="text" value="" placeholder="Search" class="form-control form-control-sm flex-grow-1">
                    <button id="rp-search-submit" class="input-group-text btn text-bg-light" data-ladda-button="true" data-style="zoom-in" type="submit"><span class="ladda-label"><i class="fas fa-magnifying-glass"></i></span></button>
                </div>
            </form>
        </div>
    </div>

        
    
    <div id="customer-list">

                <div class="table-data-wrapper">
            <table class="table table-data table-togglable"  data-toggle-column="first" data-toggle-selector=".footable-toggle">
                <thead>
                    <tr class="text-bg-dark">
                        <th>&nbsp;</th>
                                                <th>Action</th>
                                                <th class="sorting">Customer id<a href="#" class="sorting-up py-1 d-flex align-items-start" rel="noindex" data-field="customer_id" data-direction="ASC"><i class="fas fa-angle-up"></i></a><a href="#" class="sorting-down py-1 d-flex align-items-end" rel="noindex" data-field="customer_id" data-direction="DESC"><i class="fas fa-angle-down"></i></a></th>
                        <th data-breakpoints="all">Store</th>
                        <th class="sorting">First name<a href="#" class="sorting-up py-1 d-flex align-items-start" rel="noindex" data-field="first_name" data-direction="ASC"><i class="fas fa-angle-up"></i></a><a href="#" class="sorting-down py-1 d-flex align-items-end" rel="noindex" data-field="first_name" data-direction="DESC"><i class="fas fa-angle-down"></i></a></th>
                        <th class="sorting">Last name<a href="#" class="sorting-up py-1 d-flex align-items-start" rel="noindex" data-field="last_name" data-direction="ASC"><i class="fas fa-angle-up"></i></a><a href="#" class="sorting-down py-1 d-flex align-items-end" rel="noindex" data-field="last_name" data-direction="DESC"><i class="fas fa-angle-down"></i></a></th>
                        <th class="sorting">Email<a href="#" class="sorting-up py-1 d-flex align-items-start" rel="noindex" data-field="email" data-direction="ASC"><i class="fas fa-angle-up"></i></a><a href="#" class="sorting-down py-1 d-flex align-items-end" rel="noindex" data-field="email" data-direction="DESC"><i class="fas fa-angle-down"></i></a></th>
                        <th data-breakpoints="all">Address</th>
                        <th class="sorting">Active<a href="#" class="sorting-up py-1 d-flex align-items-start" rel="noindex" data-field="active" data-direction="ASC"><i class="fas fa-angle-up"></i></a><a href="#" class="sorting-down py-1 d-flex align-items-end" rel="noindex" data-field="active" data-direction="DESC"><i class="fas fa-angle-down"></i></a></th>
                        <th data-breakpoints="all">Create date</th>
                        <th data-breakpoints="all">Last update</th>
                        <th>Rental</th>
                                                </tr>
                </thead>
                <tbody>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=505" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=505" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=505" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>505</td>
                        <td>48 Maracabo Place 1570</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=505">RAFAEL</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=505">ABNEY</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=505">RAFAEL.ABNEY@sakilacustomer.org</span>
                                                        </td>
                        <td>48 Maracabo Place Talavera</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=505"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a069085f6" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a069085f6"><small class="badge rounded-pill text-bg-light prepend">21</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a069085f6">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-26 01:34:28</td>
                                                                                        <td>2005-05-29 04:00:28</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-28 19:14:09</td>
                                                                                        <td>2005-06-05 14:01:09</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-16 20:17:20</td>
                                                                                        <td>2005-06-20 23:55:20</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-17 03:36:02</td>
                                                                                        <td>2005-06-19 08:12:02</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-19 18:04:18</td>
                                                                                        <td>2005-06-28 23:52:18</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-20 19:41:28</td>
                                                                                        <td>2005-06-28 00:32:28</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 00:26:43</td>
                                                                                        <td>2005-07-16 03:58:43</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 02:22:45</td>
                                                                                        <td>2005-07-14 20:53:45</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 00:16:35</td>
                                                                                        <td>2005-07-20 01:30:35</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 17:23:33</td>
                                                                                        <td>2005-07-12 16:27:33</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-12 00:27:08</td>
                                                                                        <td>2005-07-14 03:12:08</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 07:15:32</td>
                                                                                        <td>2005-08-06 05:00:32</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 01:10:33</td>
                                                                                        <td>2005-08-10 02:45:33</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 01:19:33</td>
                                                                                        <td>2005-08-08 06:54:33</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 10:08:40</td>
                                                                                        <td>2005-08-05 14:59:40</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 15:40:47</td>
                                                                                        <td>2005-08-20 19:55:47</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 06:22:08</td>
                                                                                        <td>2005-08-28 02:22:08</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 10:27:21</td>
                                                                                        <td>2005-08-23 10:46:21</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 00:48:23</td>
                                                                                        <td>2005-08-28 01:02:23</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-23 00:30:26</td>
                                                                                        <td>2005-08-28 06:29:26</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2006-02-14 15:16:03</td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=504" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=504" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=504" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>504</td>
                        <td>786 Matsue Way 37469</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=504">NATHANIEL</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=504">ADAM</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=504">NATHANIEL.ADAM@sakilacustomer.org</span>
                                                        </td>
                        <td>786 Matsue Way Joliet</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=504"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a06908915" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a06908915"><small class="badge rounded-pill text-bg-light prepend">28</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a06908915">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-25 22:02:30</td>
                                                                                        <td>2005-05-31 18:06:30</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-27 21:17:08</td>
                                                                                        <td>2005-06-04 17:47:08</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-30 00:27:57</td>
                                                                                        <td>2005-06-06 22:19:57</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-19 14:51:55</td>
                                                                                        <td>2005-06-27 13:06:55</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-20 05:17:22</td>
                                                                                        <td>2005-06-26 09:38:22</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 10:47:35</td>
                                                                                        <td>2005-07-15 09:39:35</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 10:49:30</td>
                                                                                        <td>2005-07-13 10:44:30</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 18:04:16</td>
                                                                                        <td>2005-07-15 17:58:16</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 14:36:51</td>
                                                                                        <td>2005-07-12 15:28:51</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-09 08:35:05</td>
                                                                                        <td>2005-07-18 14:21:05</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 14:25:17</td>
                                                                                        <td>2005-08-04 10:02:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 22:38:05</td>
                                                                                        <td>2005-07-30 17:20:05</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 07:58:27</td>
                                                                                        <td>2005-08-01 02:48:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 10:23:48</td>
                                                                                        <td>2005-08-02 12:09:48</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 12:51:22</td>
                                                                                        <td>2005-07-30 12:19:22</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 06:02:11</td>
                                                                                        <td>2005-08-07 03:23:11</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 07:11:27</td>
                                                                                        <td>2005-08-03 07:51:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 11:25:28</td>
                                                                                        <td>2005-08-10 09:19:28</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 01:31:04</td>
                                                                                        <td>2005-08-24 03:36:04</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 23:26:40</td>
                                                                                        <td>2005-08-25 03:03:40</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 13:36:28</td>
                                                                                        <td>2005-08-22 07:57:28</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 15:05:34</td>
                                                                                        <td>2005-08-21 20:37:34</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 21:46:10</td>
                                                                                        <td>2005-08-24 01:16:10</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 14:53:43</td>
                                                                                        <td>2005-08-28 09:50:43</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 08:52:38</td>
                                                                                        <td>2005-08-25 08:08:38</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 15:05:37</td>
                                                                                        <td>2005-08-30 12:22:37</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-23 11:17:26</td>
                                                                                        <td>2005-08-31 13:58:26</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-23 21:44:27</td>
                                                                                        <td>2005-08-28 01:52:27</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=36" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=36" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=36" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>36</td>
                        <td>334 Munger (Monghyr) Lane 38145</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=36">KATHLEEN</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=36">ADAMS</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=36">KATHLEEN.ADAMS@sakilacustomer.org</span>
                                                        </td>
                        <td>334 Munger (Monghyr) Lane Arak</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=36"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a06908c4b" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a06908c4b"><small class="badge rounded-pill text-bg-light prepend">27</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a06908c4b">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-27 04:53:11</td>
                                                                                        <td>2005-05-28 06:33:11</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-29 04:35:29</td>
                                                                                        <td>2005-06-01 07:42:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-19 16:05:41</td>
                                                                                        <td>2005-06-20 20:48:41</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 08:15:03</td>
                                                                                        <td>2005-07-11 10:56:03</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 04:58:48</td>
                                                                                        <td>2005-07-10 04:27:48</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 14:54:42</td>
                                                                                        <td>2005-07-12 18:08:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-09 20:07:09</td>
                                                                                        <td>2005-07-12 18:33:09</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 02:37:51</td>
                                                                                        <td>2005-07-16 22:34:51</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 09:06:13</td>
                                                                                        <td>2005-08-05 07:11:13</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 01:35:17</td>
                                                                                        <td>2005-08-01 00:14:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 11:59:45</td>
                                                                                        <td>2005-08-06 11:19:45</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 18:35:12</td>
                                                                                        <td>2005-07-30 15:44:12</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 05:52:50</td>
                                                                                        <td>2005-08-03 04:45:50</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 03:20:38</td>
                                                                                        <td>2005-08-02 02:54:38</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 18:52:19</td>
                                                                                        <td>2005-08-01 12:53:19</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 11:11:10</td>
                                                                                        <td>2005-08-03 07:36:10</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 11:53:17</td>
                                                                                        <td>2005-08-07 07:24:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 20:25:35</td>
                                                                                        <td>2005-08-08 15:20:35</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 03:48:17</td>
                                                                                        <td>2005-08-02 22:15:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 03:56:23</td>
                                                                                        <td>2005-08-09 23:11:23</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 04:00:01</td>
                                                                                        <td>2005-08-20 23:03:01</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 12:06:54</td>
                                                                                        <td>2005-08-21 17:52:54</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 04:31:45</td>
                                                                                        <td>2005-08-25 09:59:45</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 04:34:46</td>
                                                                                        <td>2005-08-28 23:18:46</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 08:30:54</td>
                                                                                        <td>2005-08-22 02:59:54</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 19:15:33</td>
                                                                                        <td>2005-08-30 18:58:33</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-23 08:42:40</td>
                                                                                        <td>2005-09-01 13:08:40</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=96" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=96" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=96" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>96</td>
                        <td>1308 Arecibo Way 30695</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=96">DIANA</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=96">ALEXANDER</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=96">DIANA.ALEXANDER@sakilacustomer.org</span>
                                                        </td>
                        <td>1308 Arecibo Way Augusta-Richmond County</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=96"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a06908f41" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a06908f41"><small class="badge rounded-pill text-bg-light prepend">27</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a06908f41">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 07:11:39</td>
                                                                                        <td>2005-06-21 02:59:39</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 17:25:07</td>
                                                                                        <td>2005-06-21 17:17:07</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 18:37:04</td>
                                                                                        <td>2005-06-20 12:56:04</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-18 14:37:37</td>
                                                                                        <td>2005-06-21 08:40:37</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-20 07:59:27</td>
                                                                                        <td>2005-06-24 12:31:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-21 07:58:36</td>
                                                                                        <td>2005-06-23 05:23:36</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-21 22:00:00</td>
                                                                                        <td>2005-06-22 19:22:00</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 11:06:57</td>
                                                                                        <td>2005-07-09 14:16:57</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 12:01:38</td>
                                                                                        <td>2005-07-15 10:46:38</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 23:35:53</td>
                                                                                        <td>2005-07-14 22:46:53</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 03:12:08</td>
                                                                                        <td>2005-07-14 03:09:08</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 08:42:42</td>
                                                                                        <td>2005-07-19 03:48:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 09:44:32</td>
                                                                                        <td>2005-07-12 13:38:32</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 19:31:48</td>
                                                                                        <td>2005-07-30 01:09:48</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 07:23:43</td>
                                                                                        <td>2005-08-04 10:52:43</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 08:33:24</td>
                                                                                        <td>2005-08-04 11:07:24</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 17:05:29</td>
                                                                                        <td>2005-08-01 12:47:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 06:09:53</td>
                                                                                        <td>2005-08-08 00:50:53</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 18:40:15</td>
                                                                                        <td>2005-08-03 14:38:15</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 14:02:01</td>
                                                                                        <td>2005-08-21 19:54:01</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 18:16:30</td>
                                                                                        <td>2005-08-24 21:09:30</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 02:09:23</td>
                                                                                        <td>2005-08-22 20:33:23</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 13:48:31</td>
                                                                                        <td>2005-08-23 13:04:31</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 02:28:09</td>
                                                                                        <td>2005-08-25 00:41:09</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 14:48:55</td>
                                                                                        <td>2005-08-28 14:45:55</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 12:50:57</td>
                                                                                        <td>2005-08-27 10:42:57</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-23 20:24:36</td>
                                                                                        <td>2005-08-26 20:35:36</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=470" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=470" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=470" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>470</td>
                        <td>434 Ourense (Orense) Manor 14122</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=470">GORDON</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=470">ALLARD</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=470">GORDON.ALLARD@sakilacustomer.org</span>
                                                        </td>
                        <td>434 Ourense (Orense) Manor Hodeida</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=470"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a06909239" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a06909239"><small class="badge rounded-pill text-bg-light prepend">32</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a06909239">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-25 08:58:25</td>
                                                                                        <td>2005-05-30 14:14:25</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 06:13:57</td>
                                                                                        <td>2005-06-16 06:54:57</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 08:27:30</td>
                                                                                        <td>2005-06-16 09:46:30</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-16 05:15:12</td>
                                                                                        <td>2005-06-25 00:38:12</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 13:01:03</td>
                                                                                        <td>2005-07-13 15:26:03</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 16:34:00</td>
                                                                                        <td>2005-07-08 15:12:00</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 20:32:27</td>
                                                                                        <td>2005-07-14 19:00:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 20:10:59</td>
                                                                                        <td>2005-07-12 21:30:59</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 02:12:04</td>
                                                                                        <td>2005-07-15 02:19:04</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-09 05:28:38</td>
                                                                                        <td>2005-07-10 02:46:38</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 01:51:58</td>
                                                                                        <td>2005-07-18 07:12:58</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 12:12:17</td>
                                                                                        <td>2005-07-18 07:40:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-12 12:50:19</td>
                                                                                        <td>2005-07-16 13:41:19</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-26 22:56:00</td>
                                                                                        <td>2005-08-05 03:16:00</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-26 23:27:40</td>
                                                                                        <td>2005-07-31 03:17:40</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 02:19:48</td>
                                                                                        <td>2005-07-30 21:43:48</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 08:39:12</td>
                                                                                        <td>2005-08-06 03:03:12</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 00:42:06</td>
                                                                                        <td>2005-08-05 21:04:06</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 21:08:41</td>
                                                                                        <td>2005-08-07 15:55:41</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 06:52:54</td>
                                                                                        <td>2005-08-01 03:40:54</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 17:54:35</td>
                                                                                        <td>2005-08-02 20:40:35</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 02:05:34</td>
                                                                                        <td>2005-08-01 23:40:34</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 03:20:03</td>
                                                                                        <td>2005-08-04 04:13:03</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 18:53:14</td>
                                                                                        <td>2005-08-09 18:09:14</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 07:30:55</td>
                                                                                        <td>2005-08-18 09:21:55</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 08:48:43</td>
                                                                                        <td>2005-08-23 07:18:43</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 01:15:47</td>
                                                                                        <td>2005-08-24 23:23:47</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 10:14:52</td>
                                                                                        <td>2005-08-26 13:16:52</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 22:37:39</td>
                                                                                        <td>2005-08-27 00:21:39</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 05:32:23</td>
                                                                                        <td>2005-08-27 23:36:23</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 05:50:35</td>
                                                                                        <td>2005-08-23 04:52:35</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 10:45:01</td>
                                                                                        <td>2005-08-30 04:48:01</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=27" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=27" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=27" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>27</td>
                        <td>217 Botshabelo Place 49521</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=27">SHIRLEY</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=27">ALLEN</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=27">SHIRLEY.ALLEN@sakilacustomer.org</span>
                                                        </td>
                        <td>217 Botshabelo Place Davao</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=27"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a0690954d" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a0690954d"><small class="badge rounded-pill text-bg-light prepend">31</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a0690954d">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-29 16:03:03</td>
                                                                                        <td>2005-06-07 11:07:03</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 10:11:42</td>
                                                                                        <td>2005-06-16 15:00:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 21:17:17</td>
                                                                                        <td>2005-06-23 22:01:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-16 13:05:09</td>
                                                                                        <td>2005-06-17 09:53:09</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-17 08:59:57</td>
                                                                                        <td>2005-06-23 14:38:57</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-18 23:48:47</td>
                                                                                        <td>2005-06-21 04:58:47</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-19 20:03:29</td>
                                                                                        <td>2005-06-25 22:50:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-20 12:28:59</td>
                                                                                        <td>2005-06-25 07:48:59</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-21 17:22:36</td>
                                                                                        <td>2005-06-28 12:34:36</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 02:52:53</td>
                                                                                        <td>2005-07-11 22:32:53</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 02:34:51</td>
                                                                                        <td>2005-07-17 06:03:51</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 03:01:19</td>
                                                                                        <td>2005-07-13 06:53:19</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 11:45:48</td>
                                                                                        <td>2005-07-13 16:40:48</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 07:36:50</td>
                                                                                        <td>2005-07-13 11:30:50</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-12 05:26:26</td>
                                                                                        <td>2005-07-16 05:10:26</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-12 11:13:21</td>
                                                                                        <td>2005-07-17 09:10:21</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 12:13:42</td>
                                                                                        <td>2005-08-05 12:02:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 14:06:53</td>
                                                                                        <td>2005-08-03 19:46:53</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 05:12:59</td>
                                                                                        <td>2005-08-09 07:31:59</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 06:34:55</td>
                                                                                        <td>2005-08-09 09:15:55</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 14:39:52</td>
                                                                                        <td>2005-08-09 09:46:52</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 21:51:15</td>
                                                                                        <td>2005-08-10 18:51:15</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 00:00:33</td>
                                                                                        <td>2005-08-03 23:09:33</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 13:12:17</td>
                                                                                        <td>2005-08-05 17:37:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 05:25:57</td>
                                                                                        <td>2005-08-25 04:37:57</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 08:48:31</td>
                                                                                        <td>2005-08-24 07:47:31</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 19:52:43</td>
                                                                                        <td>2005-08-23 21:49:43</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 11:28:14</td>
                                                                                        <td>2005-08-21 09:47:14</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 13:57:50</td>
                                                                                        <td>2005-08-22 09:46:50</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 13:13:56</td>
                                                                                        <td>2005-08-25 09:46:56</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 10:00:04</td>
                                                                                        <td>2005-08-26 08:26:04</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=220" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=220" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=220" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>220</td>
                        <td>1842 Luzinia Boulevard 94420</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=220">CHARLENE</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=220">ALVAREZ</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=220">CHARLENE.ALVAREZ@sakilacustomer.org</span>
                                                        </td>
                        <td>1842 Luzinia Boulevard Zanzibar</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=220"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a06909845" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a06909845"><small class="badge rounded-pill text-bg-light prepend">27</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a06909845">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-27 14:10:58</td>
                                                                                        <td>2005-06-02 10:40:58</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-27 22:47:39</td>
                                                                                        <td>2005-06-04 21:17:39</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-16 22:35:20</td>
                                                                                        <td>2005-06-19 03:09:20</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 21:37:31</td>
                                                                                        <td>2005-07-11 20:16:31</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 05:15:43</td>
                                                                                        <td>2005-07-13 05:17:43</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 17:27:42</td>
                                                                                        <td>2005-07-12 14:51:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 18:02:02</td>
                                                                                        <td>2005-07-11 23:24:02</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 23:19:21</td>
                                                                                        <td>2005-07-16 19:48:21</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-12 18:51:41</td>
                                                                                        <td>2005-07-20 13:29:41</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 05:55:30</td>
                                                                                        <td>2005-08-06 04:32:30</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 17:15:48</td>
                                                                                        <td>2005-08-04 15:49:48</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 06:12:40</td>
                                                                                        <td>2005-08-02 05:01:40</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 19:25:35</td>
                                                                                        <td>2005-08-08 21:50:35</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 22:20:29</td>
                                                                                        <td>2005-08-08 20:08:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 20:47:14</td>
                                                                                        <td>2005-08-02 17:25:14</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 21:11:39</td>
                                                                                        <td>2005-08-02 22:59:39</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 03:23:23</td>
                                                                                        <td>2005-08-05 23:18:23</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 05:58:12</td>
                                                                                        <td>2005-08-07 11:26:12</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 09:54:19</td>
                                                                                        <td>2005-08-10 14:57:19</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 04:15:46</td>
                                                                                        <td>2005-08-24 04:48:46</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 17:08:13</td>
                                                                                        <td>2005-08-23 21:53:13</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 09:39:26</td>
                                                                                        <td>2005-08-24 05:19:26</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 03:52:44</td>
                                                                                        <td>2005-08-24 22:27:44</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 11:55:13</td>
                                                                                        <td>2005-08-21 05:55:13</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 18:07:47</td>
                                                                                        <td>2005-08-20 21:51:47</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 20:52:03</td>
                                                                                        <td>2005-08-23 18:04:03</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-23 10:32:52</td>
                                                                                        <td>2005-08-24 07:03:52</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=11" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=11" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=11" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>11</td>
                        <td>1542 Tarlac Parkway 1027</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=11">LISA</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=11">ANDERSON</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=11">LISA.ANDERSON@sakilacustomer.org</span>
                                                        </td>
                        <td>1542 Tarlac Parkway Sagamihara</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=11"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a06909b29" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a06909b29"><small class="badge rounded-pill text-bg-light prepend">24</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a06909b29">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-30 22:59:12</td>
                                                                                        <td>2005-06-07 20:56:12</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 20:53:07</td>
                                                                                        <td>2005-06-25 02:12:07</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-17 07:26:45</td>
                                                                                        <td>2005-06-25 13:06:45</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-20 23:49:12</td>
                                                                                        <td>2005-06-24 03:00:12</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 07:19:11</td>
                                                                                        <td>2005-07-11 01:37:11</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 22:43:05</td>
                                                                                        <td>2005-07-15 18:17:05</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 16:44:58</td>
                                                                                        <td>2005-07-17 16:03:58</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 09:09:59</td>
                                                                                        <td>2005-07-20 11:42:59</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 13:13:32</td>
                                                                                        <td>2005-08-03 09:24:32</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 15:32:07</td>
                                                                                        <td>2005-07-31 20:52:07</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 18:43:11</td>
                                                                                        <td>2005-08-02 15:56:11</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 07:38:14</td>
                                                                                        <td>2005-08-05 02:27:14</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 17:33:45</td>
                                                                                        <td>2005-08-01 17:30:45</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 03:17:13</td>
                                                                                        <td>2005-08-07 00:20:13</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 16:08:21</td>
                                                                                        <td>2005-08-07 10:38:21</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 22:41:16</td>
                                                                                        <td>2005-08-07 00:50:16</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 10:14:58</td>
                                                                                        <td>2005-08-11 11:43:58</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-16 23:06:30</td>
                                                                                        <td>2005-08-19 03:49:30</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 19:32:44</td>
                                                                                        <td>2005-08-23 13:36:44</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 05:07:27</td>
                                                                                        <td>2005-08-23 23:33:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 12:17:27</td>
                                                                                        <td>2005-08-25 12:20:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 12:42:47</td>
                                                                                        <td>2005-08-23 14:21:47</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 17:46:41</td>
                                                                                        <td>2005-08-23 15:08:41</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2006-02-14 15:16:03</td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=326" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=326" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=326" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>326</td>
                        <td>1016 Iwakuni Street 49833</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=326">JOSE</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=326">ANDREW</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=326">JOSE.ANDREW@sakilacustomer.org</span>
                                                        </td>
                        <td>1016 Iwakuni Street Kingstown</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=326"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a06909df7" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a06909df7"><small class="badge rounded-pill text-bg-light prepend">25</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a06909df7">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-30 05:38:24</td>
                                                                                        <td>2005-06-06 00:34:24</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-30 21:52:42</td>
                                                                                        <td>2005-06-01 03:15:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-31 21:03:17</td>
                                                                                        <td>2005-06-08 19:58:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 10:11:59</td>
                                                                                        <td>2005-06-17 08:44:59</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-17 17:32:07</td>
                                                                                        <td>2005-06-21 20:19:07</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-18 09:12:18</td>
                                                                                        <td>2005-06-21 05:50:18</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-21 20:00:12</td>
                                                                                        <td>2005-06-24 00:24:12</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 18:44:24</td>
                                                                                        <td>2005-07-08 15:11:24</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 09:13:17</td>
                                                                                        <td>2005-07-15 11:50:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-09 08:17:41</td>
                                                                                        <td>2005-07-18 09:45:41</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 05:48:36</td>
                                                                                        <td>2005-08-01 00:33:36</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 04:47:14</td>
                                                                                        <td>2005-08-04 09:03:14</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 12:23:41</td>
                                                                                        <td>2005-08-06 09:49:41</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 08:25:35</td>
                                                                                        <td>2005-08-07 03:28:35</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 13:07:13</td>
                                                                                        <td>2005-07-31 18:00:13</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 18:34:33</td>
                                                                                        <td>2005-08-02 16:05:33</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 13:00:33</td>
                                                                                        <td>2005-08-03 16:18:33</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 21:02:14</td>
                                                                                        <td>2005-08-01 18:28:14</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 23:36:59</td>
                                                                                        <td>2005-08-08 20:20:59</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 19:04:33</td>
                                                                                        <td>2005-08-06 23:12:33</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 04:11:48</td>
                                                                                        <td>2005-08-06 06:30:48</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 05:06:27</td>
                                                                                        <td>2005-08-03 23:47:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 20:03:10</td>
                                                                                        <td>2005-08-04 01:55:10</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 22:33:25</td>
                                                                                        <td>2005-08-04 23:26:25</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 01:38:18</td>
                                                                                        <td>2005-08-25 22:23:18</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=183" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=183" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=183" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>183</td>
                        <td>1839 Szkesfehrvr Parkway 55709</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=183">IDA</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=183">ANDREWS</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=183">IDA.ANDREWS@sakilacustomer.org</span>
                                                        </td>
                        <td>1839 Szkesfehrvr Parkway Luzinia</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=183"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a0690a0fb" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a0690a0fb"><small class="badge rounded-pill text-bg-light prepend">23</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a0690a0fb">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-27 10:12:00</td>
                                                                                        <td>2005-05-31 15:03:00</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 08:13:57</td>
                                                                                        <td>2005-06-18 09:36:57</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-18 01:19:04</td>
                                                                                        <td>2005-06-25 03:59:04</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-18 20:31:00</td>
                                                                                        <td>2005-06-24 18:01:00</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-21 14:02:59</td>
                                                                                        <td>2005-06-29 18:11:59</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 17:56:46</td>
                                                                                        <td>2005-07-10 20:44:46</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 08:14:24</td>
                                                                                        <td>2005-07-09 10:42:24</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 09:04:26</td>
                                                                                        <td>2005-07-08 09:55:26</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-09 04:56:30</td>
                                                                                        <td>2005-07-13 23:53:30</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 12:39:28</td>
                                                                                        <td>2005-07-11 14:08:28</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-12 01:33:25</td>
                                                                                        <td>2005-07-15 20:26:25</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-12 05:47:40</td>
                                                                                        <td>2005-07-20 06:23:40</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 14:51:04</td>
                                                                                        <td>2005-07-31 16:03:04</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 06:34:06</td>
                                                                                        <td>2005-08-08 10:29:06</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 11:34:32</td>
                                                                                        <td>2005-08-04 08:20:32</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 15:18:19</td>
                                                                                        <td>2005-08-04 14:23:19</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 15:09:17</td>
                                                                                        <td>2005-08-09 13:58:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 18:24:03</td>
                                                                                        <td>2005-08-06 21:22:03</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 11:04:42</td>
                                                                                        <td>2005-08-20 08:20:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 23:14:15</td>
                                                                                        <td>2005-08-22 20:23:15</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 01:40:43</td>
                                                                                        <td>2005-08-28 05:22:43</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 01:14:30</td>
                                                                                        <td>2005-08-24 04:57:30</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 03:35:16</td>
                                                                                        <td>2005-08-25 04:06:16</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=449" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=449" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=449" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>449</td>
                        <td>956 Nam Dinh Manor 21872</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=449">OSCAR</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=449">AQUINO</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=449">OSCAR.AQUINO@sakilacustomer.org</span>
                                                        </td>
                        <td>956 Nam Dinh Manor Sirjan</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=449"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a0690a3b5" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a0690a3b5"><small class="badge rounded-pill text-bg-light prepend">20</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a0690a3b5">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-26 15:47:40</td>
                                                                                        <td>2005-05-30 10:07:40</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-27 01:09:55</td>
                                                                                        <td>2005-05-31 07:01:55</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-30 01:23:07</td>
                                                                                        <td>2005-06-07 01:50:07</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 09:17:20</td>
                                                                                        <td>2005-06-18 10:14:20</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-18 12:15:43</td>
                                                                                        <td>2005-06-24 14:03:43</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-20 07:51:51</td>
                                                                                        <td>2005-06-28 10:14:51</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 00:17:24</td>
                                                                                        <td>2005-07-08 03:47:24</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 23:00:49</td>
                                                                                        <td>2005-07-15 00:41:49</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 22:45:41</td>
                                                                                        <td>2005-07-16 23:30:41</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 16:19:53</td>
                                                                                        <td>2005-07-12 11:17:53</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 06:22:18</td>
                                                                                        <td>2005-08-06 11:38:18</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 07:52:13</td>
                                                                                        <td>2005-08-03 13:35:13</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 15:11:00</td>
                                                                                        <td>2005-07-31 15:46:00</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 20:10:19</td>
                                                                                        <td>2005-08-06 23:18:19</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 07:49:15</td>
                                                                                        <td>2005-08-02 13:42:15</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 08:08:39</td>
                                                                                        <td>2005-08-10 09:26:39</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 11:41:55</td>
                                                                                        <td>2005-08-08 17:16:55</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 17:53:43</td>
                                                                                        <td>2005-08-09 21:50:43</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 02:33:29</td>
                                                                                        <td>2005-08-25 07:10:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 06:37:43</td>
                                                                                        <td>2005-08-29 03:44:43</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=368" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=368" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=368" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>368</td>
                        <td>1922 Miraj Way 13203</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=368">HARRY</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=368">ARCE</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=368">HARRY.ARCE@sakilacustomer.org</span>
                                                        </td>
                        <td>1922 Miraj Way Najafabad</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=368"><i class="fas fa-xmark icon-md text-danger"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a0690a6a8" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a0690a6a8"><small class="badge rounded-pill text-bg-light prepend">35</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a0690a6a8">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-25 09:21:29</td>
                                                                                        <td>2005-06-03 11:31:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-25 20:48:50</td>
                                                                                        <td>2005-06-02 21:39:50</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-29 23:56:42</td>
                                                                                        <td>2005-05-31 04:11:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-30 15:50:39</td>
                                                                                        <td>2005-06-03 14:25:39</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 00:56:45</td>
                                                                                        <td>2005-06-16 02:23:45</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 22:53:30</td>
                                                                                        <td>2005-06-23 01:00:30</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-19 01:20:49</td>
                                                                                        <td>2005-06-22 01:50:49</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-19 13:17:21</td>
                                                                                        <td>2005-06-24 15:09:21</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-19 16:20:40</td>
                                                                                        <td>2005-06-22 11:44:40</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-21 05:33:04</td>
                                                                                        <td>2005-06-30 00:37:04</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 05:35:39</td>
                                                                                        <td>2005-07-10 07:46:39</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 04:34:09</td>
                                                                                        <td>2005-07-10 23:54:09</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 06:11:02</td>
                                                                                        <td>2005-07-11 05:14:02</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 21:27:48</td>
                                                                                        <td>2005-07-18 02:51:48</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 08:02:32</td>
                                                                                        <td>2005-07-12 05:58:32</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 09:32:19</td>
                                                                                        <td>2005-07-16 15:10:19</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-12 12:04:12</td>
                                                                                        <td>2005-07-19 11:01:12</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 22:43:42</td>
                                                                                        <td>2005-07-30 22:17:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 16:49:38</td>
                                                                                        <td>2005-08-03 15:42:38</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 00:01:04</td>
                                                                                        <td>2005-08-01 19:08:04</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 20:15:58</td>
                                                                                        <td>2005-08-03 21:21:58</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 12:05:01</td>
                                                                                        <td>2005-08-09 09:25:01</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 19:21:42</td>
                                                                                        <td>2005-08-10 21:18:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 23:50:22</td>
                                                                                        <td>2005-08-06 00:52:22</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 13:16:04</td>
                                                                                        <td>2005-08-18 10:16:04</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 06:26:45</td>
                                                                                        <td>2005-08-23 01:35:45</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 00:22:24</td>
                                                                                        <td>2005-08-19 22:53:24</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 14:27:16</td>
                                                                                        <td>2005-08-28 10:34:16</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 18:02:51</td>
                                                                                        <td>2005-08-21 23:17:51</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 21:33:35</td>
                                                                                        <td>2005-08-20 22:47:35</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 12:06:45</td>
                                                                                        <td>2005-08-26 06:50:45</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 18:20:18</td>
                                                                                        <td>2005-08-24 21:26:18</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 10:22:51</td>
                                                                                        <td>2005-08-29 08:28:51</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 21:18:08</td>
                                                                                        <td>2005-08-25 20:29:08</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-23 00:31:09</td>
                                                                                        <td>2005-08-30 06:17:09</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=560" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=560" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=560" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>560</td>
                        <td>1229 Varanasi (Benares) Manor 40195</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=560">JORDAN</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=560">ARCHULETA</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=560">JORDAN.ARCHULETA@sakilacustomer.org</span>
                                                        </td>
                        <td>1229 Varanasi (Benares) Manor Avellaneda</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=560"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a0690a9be" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a0690a9be"><small class="badge rounded-pill text-bg-light prepend">30</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a0690a9be">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-25 22:25:18</td>
                                                                                        <td>2005-06-01 02:30:18</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 07:32:24</td>
                                                                                        <td>2005-06-21 05:12:24</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-16 03:23:22</td>
                                                                                        <td>2005-06-20 06:03:22</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 21:20:37</td>
                                                                                        <td>2005-07-09 01:35:37</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 16:27:25</td>
                                                                                        <td>2005-07-12 18:20:25</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 20:20:29</td>
                                                                                        <td>2005-07-16 19:29:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 23:32:39</td>
                                                                                        <td>2005-07-12 01:38:39</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-09 11:16:56</td>
                                                                                        <td>2005-07-10 07:21:56</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 23:08:06</td>
                                                                                        <td>2005-07-19 19:57:06</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-26 23:35:29</td>
                                                                                        <td>2005-07-28 00:12:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 09:00:20</td>
                                                                                        <td>2005-08-04 03:09:20</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 10:43:56</td>
                                                                                        <td>2005-08-05 14:04:56</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 19:15:50</td>
                                                                                        <td>2005-07-31 19:13:50</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 23:47:29</td>
                                                                                        <td>2005-08-07 01:27:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 01:21:39</td>
                                                                                        <td>2005-08-07 02:14:39</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 14:55:25</td>
                                                                                        <td>2005-08-02 11:34:25</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 14:07:56</td>
                                                                                        <td>2005-08-05 14:56:56</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 10:13:41</td>
                                                                                        <td>2005-08-03 10:27:41</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 18:34:59</td>
                                                                                        <td>2005-08-09 23:44:59</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 19:28:01</td>
                                                                                        <td>2005-08-09 18:41:01</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 16:53:20</td>
                                                                                        <td>2005-08-11 20:47:20</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 10:59:18</td>
                                                                                        <td>2005-08-22 11:12:18</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 20:26:00</td>
                                                                                        <td>2005-08-28 17:23:00</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 08:38:24</td>
                                                                                        <td>2005-08-26 12:36:24</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 09:20:03</td>
                                                                                        <td>2005-08-23 14:26:03</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 11:48:27</td>
                                                                                        <td>2005-08-25 15:49:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 00:24:37</td>
                                                                                        <td>2005-08-25 04:15:37</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 21:16:54</td>
                                                                                        <td>2005-08-31 00:38:54</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2006-02-14 15:16:03</td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2006-02-14 15:16:03</td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=188" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=188" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=188" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>188</td>
                        <td>1166 Changhwa Street 58852</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=188">MELANIE</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=188">ARMSTRONG</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=188">MELANIE.ARMSTRONG@sakilacustomer.org</span>
                                                        </td>
                        <td>1166 Changhwa Street Bayugan</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=188"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a0690acae" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a0690acae"><small class="badge rounded-pill text-bg-light prepend">25</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a0690acae">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-06-16 00:31:40</td>
                                                                                        <td>2005-06-21 05:20:40</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-17 06:48:19</td>
                                                                                        <td>2005-06-21 03:23:19</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-18 23:57:31</td>
                                                                                        <td>2005-06-22 05:31:31</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-19 15:21:53</td>
                                                                                        <td>2005-06-23 11:58:53</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 16:47:32</td>
                                                                                        <td>2005-07-14 15:00:32</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 08:43:22</td>
                                                                                        <td>2005-07-08 05:21:22</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-09 18:08:28</td>
                                                                                        <td>2005-07-14 14:11:28</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 11:27:25</td>
                                                                                        <td>2005-07-15 06:13:25</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-12 05:08:16</td>
                                                                                        <td>2005-07-14 04:09:16</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 03:20:18</td>
                                                                                        <td>2005-08-01 02:23:18</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 22:17:17</td>
                                                                                        <td>2005-07-28 19:17:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 03:58:53</td>
                                                                                        <td>2005-08-02 00:10:53</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 09:13:27</td>
                                                                                        <td>2005-08-08 11:34:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 10:45:21</td>
                                                                                        <td>2005-08-02 12:34:21</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 19:00:28</td>
                                                                                        <td>2005-08-07 17:04:28</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 20:22:44</td>
                                                                                        <td>2005-08-04 19:48:44</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 18:16:52</td>
                                                                                        <td>2005-08-03 14:25:52</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 05:04:57</td>
                                                                                        <td>2005-08-24 06:19:57</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 12:15:23</td>
                                                                                        <td>2005-08-27 06:24:23</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 10:33:23</td>
                                                                                        <td>2005-08-27 08:00:23</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 01:00:42</td>
                                                                                        <td>2005-08-29 19:55:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 20:17:17</td>
                                                                                        <td>2005-08-25 01:06:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 23:26:32</td>
                                                                                        <td>2005-08-24 22:44:32</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-23 01:39:10</td>
                                                                                        <td>2005-08-23 21:46:10</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2006-02-14 15:16:03</td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=170" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=170" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=170" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>170</td>
                        <td>1877 Ezhou Lane 63337</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=170">BEATRICE</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=170">ARNOLD</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=170">BEATRICE.ARNOLD@sakilacustomer.org</span>
                                                        </td>
                        <td>1877 Ezhou Lane Udaipur</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=170"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a0690af96" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a0690af96"><small class="badge rounded-pill text-bg-light prepend">26</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a0690af96">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-26 08:33:10</td>
                                                                                        <td>2005-05-28 14:09:10</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-27 09:04:05</td>
                                                                                        <td>2005-06-02 03:36:05</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-28 02:05:34</td>
                                                                                        <td>2005-05-30 23:03:34</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-17 20:24:00</td>
                                                                                        <td>2005-06-23 17:45:00</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-18 16:59:34</td>
                                                                                        <td>2005-06-27 16:10:34</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 07:40:31</td>
                                                                                        <td>2005-07-08 03:39:31</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 12:18:03</td>
                                                                                        <td>2005-07-11 07:25:03</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 06:49:52</td>
                                                                                        <td>2005-07-12 04:00:52</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 00:17:59</td>
                                                                                        <td>2005-07-12 05:51:59</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-09 05:12:07</td>
                                                                                        <td>2005-07-12 08:29:07</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 03:50:47</td>
                                                                                        <td>2005-07-17 06:40:47</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 09:01:38</td>
                                                                                        <td>2005-07-17 10:58:38</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 15:17:33</td>
                                                                                        <td>2005-07-14 12:14:33</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 15:10:14</td>
                                                                                        <td>2005-08-06 17:08:14</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 00:41:23</td>
                                                                                        <td>2005-08-02 23:08:23</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 11:33:31</td>
                                                                                        <td>2005-08-08 14:49:31</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 20:49:10</td>
                                                                                        <td>2005-08-08 20:15:10</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 10:17:26</td>
                                                                                        <td>2005-08-09 08:50:26</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 06:00:53</td>
                                                                                        <td>2005-08-05 06:19:53</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 20:44:34</td>
                                                                                        <td>2005-08-26 21:47:34</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 06:37:51</td>
                                                                                        <td>2005-08-25 06:58:51</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 10:19:06</td>
                                                                                        <td>2005-08-20 05:49:06</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 14:57:01</td>
                                                                                        <td>2005-08-27 10:48:01</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 21:08:49</td>
                                                                                        <td>2005-08-29 21:57:49</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 20:01:51</td>
                                                                                        <td>2005-08-26 14:30:51</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-23 04:27:06</td>
                                                                                        <td>2005-09-01 06:07:06</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=591" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=591" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=591" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>591</td>
                        <td>32 Liaocheng Way 1944</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=591">KENT</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=591">ARSENAULT</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=591">KENT.ARSENAULT@sakilacustomer.org</span>
                                                        </td>
                        <td>32 Liaocheng Way Juiz de Fora</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=591"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a0690b27d" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a0690b27d"><small class="badge rounded-pill text-bg-light prepend">27</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a0690b27d">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 17:51:27</td>
                                                                                        <td>2005-06-18 23:20:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-21 10:37:25</td>
                                                                                        <td>2005-06-26 15:38:25</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-21 19:14:58</td>
                                                                                        <td>2005-06-24 19:58:58</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 07:03:52</td>
                                                                                        <td>2005-07-08 03:14:52</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 20:45:51</td>
                                                                                        <td>2005-07-17 00:52:51</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 06:05:06</td>
                                                                                        <td>2005-07-16 00:54:06</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 10:06:29</td>
                                                                                        <td>2005-07-17 10:48:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 12:43:22</td>
                                                                                        <td>2005-07-16 16:42:22</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 05:53:50</td>
                                                                                        <td>2005-08-05 04:19:50</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 09:21:22</td>
                                                                                        <td>2005-08-01 04:47:22</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 20:38:40</td>
                                                                                        <td>2005-08-04 22:36:40</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 21:53:21</td>
                                                                                        <td>2005-08-05 18:53:21</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 05:25:55</td>
                                                                                        <td>2005-08-02 02:40:55</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 15:02:25</td>
                                                                                        <td>2005-08-04 14:35:25</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 20:48:12</td>
                                                                                        <td>2005-08-01 20:07:12</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 15:39:38</td>
                                                                                        <td>2005-08-06 17:12:38</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 22:14:26</td>
                                                                                        <td>2005-08-06 23:02:26</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 06:48:33</td>
                                                                                        <td>2005-08-01 07:07:33</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 08:05:59</td>
                                                                                        <td>2005-08-04 13:46:59</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 02:18:52</td>
                                                                                        <td>2005-08-22 21:01:52</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 03:04:28</td>
                                                                                        <td>2005-08-21 08:52:28</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 14:29:39</td>
                                                                                        <td>2005-08-22 16:52:39</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 15:31:18</td>
                                                                                        <td>2005-08-23 15:20:18</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 05:18:42</td>
                                                                                        <td>2005-08-24 10:42:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 11:06:06</td>
                                                                                        <td>2005-08-21 13:50:06</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 20:22:08</td>
                                                                                        <td>2005-08-27 17:21:08</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 15:05:42</td>
                                                                                        <td>2005-08-29 10:48:42</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=345" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=345" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=345" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>345</td>
                        <td>1628 Nagareyama Lane 60079</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=345">CARL</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=345">ARTIS</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=345">CARL.ARTIS@sakilacustomer.org</span>
                                                        </td>
                        <td>1628 Nagareyama Lane San Lorenzo</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=345"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a0690b53e" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a0690b53e"><small class="badge rounded-pill text-bg-light prepend">23</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a0690b53e">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-26 08:01:54</td>
                                                                                        <td>2005-05-27 06:26:54</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-27 07:14:00</td>
                                                                                        <td>2005-05-28 12:22:00</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 02:57:51</td>
                                                                                        <td>2005-06-20 01:41:51</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 20:05:49</td>
                                                                                        <td>2005-06-19 15:35:49</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-16 01:58:35</td>
                                                                                        <td>2005-06-18 23:56:35</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-19 17:45:15</td>
                                                                                        <td>2005-06-23 20:11:15</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 22:09:45</td>
                                                                                        <td>2005-07-10 01:43:45</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 22:22:44</td>
                                                                                        <td>2005-07-08 22:23:44</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-07 23:20:05</td>
                                                                                        <td>2005-07-13 19:50:05</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 00:50:01</td>
                                                                                        <td>2005-07-16 19:07:01</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 18:04:29</td>
                                                                                        <td>2005-07-17 23:40:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 04:46:00</td>
                                                                                        <td>2005-08-03 07:22:00</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 19:47:02</td>
                                                                                        <td>2005-07-31 21:33:02</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 16:44:48</td>
                                                                                        <td>2005-08-06 16:28:48</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 11:23:22</td>
                                                                                        <td>2005-07-31 07:34:22</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 12:49:57</td>
                                                                                        <td>2005-07-31 14:32:57</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 01:04:28</td>
                                                                                        <td>2005-08-09 21:43:28</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 04:19:11</td>
                                                                                        <td>2005-08-04 00:20:11</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 14:03:46</td>
                                                                                        <td>2005-08-19 08:39:46</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 12:41:41</td>
                                                                                        <td>2005-08-22 16:38:41</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 00:36:34</td>
                                                                                        <td>2005-08-26 20:38:34</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 21:00:03</td>
                                                                                        <td>2005-08-30 16:59:03</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-23 04:28:25</td>
                                                                                        <td>2005-08-26 07:19:25</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=530" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=530" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=530" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>530</td>
                        <td>166 Jinchang Street 86760</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=530">DARRYL</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=530">ASHCRAFT</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=530">DARRYL.ASHCRAFT@sakilacustomer.org</span>
                                                        </td>
                        <td>166 Jinchang Street Ezeiza</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=530"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a0690b804" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a0690b804"><small class="badge rounded-pill text-bg-light prepend">23</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a0690b804">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-30 01:35:15</td>
                                                                                        <td>2005-06-06 07:27:15</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 07:52:35</td>
                                                                                        <td>2005-06-21 04:55:35</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 23:11:10</td>
                                                                                        <td>2005-06-17 20:37:10</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-17 23:36:27</td>
                                                                                        <td>2005-06-19 19:25:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 08:38:29</td>
                                                                                        <td>2005-07-10 05:28:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-06 18:46:34</td>
                                                                                        <td>2005-07-07 13:15:34</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 08:01:33</td>
                                                                                        <td>2005-07-15 03:36:33</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 03:02:07</td>
                                                                                        <td>2005-08-02 07:14:07</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 04:11:40</td>
                                                                                        <td>2005-08-03 08:16:40</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-27 09:34:24</td>
                                                                                        <td>2005-08-01 07:00:24</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 23:26:35</td>
                                                                                        <td>2005-08-01 23:00:35</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 18:31:15</td>
                                                                                        <td>2005-07-30 16:24:15</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 14:51:19</td>
                                                                                        <td>2005-08-05 09:51:19</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 01:01:16</td>
                                                                                        <td>2005-08-10 01:31:16</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 11:10:55</td>
                                                                                        <td>2005-08-10 10:16:55</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 16:34:29</td>
                                                                                        <td>2005-08-03 17:40:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 02:50:02</td>
                                                                                        <td>2005-08-22 00:20:02</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 08:46:24</td>
                                                                                        <td>2005-08-21 02:56:24</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 18:31:47</td>
                                                                                        <td>2005-08-22 21:07:47</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 19:52:38</td>
                                                                                        <td>2005-08-26 14:57:38</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 21:06:29</td>
                                                                                        <td>2005-08-30 23:37:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 10:49:06</td>
                                                                                        <td>2005-08-23 10:25:06</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2006-02-14 15:16:03</td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=540" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=540" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=540" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>540</td>
                        <td>191 Jos Azueta Parkway 13629</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=540">TYRONE</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=540">ASHER</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=540">TYRONE.ASHER@sakilacustomer.org</span>
                                                        </td>
                        <td>191 Jos Azueta Parkway Ruse</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=540"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a0690bad7" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a0690bad7"><small class="badge rounded-pill text-bg-light prepend">24</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a0690bad7">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 06:56:39</td>
                                                                                        <td>2005-06-16 11:08:39</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 08:52:44</td>
                                                                                        <td>2005-06-24 13:36:44</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-19 09:26:13</td>
                                                                                        <td>2005-06-20 14:38:13</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-20 06:39:11</td>
                                                                                        <td>2005-06-26 06:19:11</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-21 10:37:23</td>
                                                                                        <td>2005-06-26 07:21:23</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 08:25:52</td>
                                                                                        <td>2005-07-10 11:22:52</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-09 00:49:03</td>
                                                                                        <td>2005-07-13 05:02:03</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 06:59:55</td>
                                                                                        <td>2005-07-16 09:30:55</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 09:07:01</td>
                                                                                        <td>2005-07-19 08:21:01</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-11 11:11:38</td>
                                                                                        <td>2005-07-17 08:33:38</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-12 14:39:27</td>
                                                                                        <td>2005-07-18 13:40:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-12 22:32:17</td>
                                                                                        <td>2005-07-18 20:09:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 09:32:54</td>
                                                                                        <td>2005-08-05 04:55:54</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 11:30:51</td>
                                                                                        <td>2005-08-08 12:52:51</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 02:20:19</td>
                                                                                        <td>2005-08-11 05:50:19</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 11:45:15</td>
                                                                                        <td>2005-08-10 11:42:15</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 16:31:17</td>
                                                                                        <td>2005-08-08 15:38:17</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 20:10:01</td>
                                                                                        <td>2005-08-07 01:28:01</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-17 21:07:41</td>
                                                                                        <td>2005-08-26 16:07:41</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 02:14:06</td>
                                                                                        <td>2005-08-23 04:44:06</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 05:36:14</td>
                                                                                        <td>2005-08-25 00:20:14</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 04:50:52</td>
                                                                                        <td>2005-08-25 04:14:52</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-22 11:09:56</td>
                                                                                        <td>2005-08-24 15:40:56</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-23 19:13:46</td>
                                                                                        <td>2005-08-28 23:05:46</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                        <tr>
                        <td></td>
                                                <td class="has-btn-group no-ellipsis">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary btn-view-record" data-target="customer/view/customer_id=196" data-bs-toggle="tooltip" data-bs-title="Show details"><span class="fas fa-eye icon-md"></span></a>
                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/edit/customer_id=196" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-title="Edit"><span class="fas fa-pencil icon-md"></span></a>
                                                                                                <a href="https://www.phpcrudgenerator.com/admin/customer/delete/customer_id=196" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-title="Remove"><span class="fas fa-circle-xmark icon-md"></span></a>
                                                            </div>
                        </td>
                                                <td>196</td>
                        <td>1074 Binzhou Manor 36490</td>
                            <td>
                                                        <span class="jedit-text tip" data-field="first_name" data-delay="500" title="Click to edit" id="customer:first_name:customer_id=196">ALMA</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="last_name" data-delay="500" title="Click to edit" id="customer:last_name:customer_id=196">AUSTIN</span>
                                                        </td>
                            <td>
                                                        <span class="jedit-text tip" data-field="email" data-delay="500" title="Click to edit" id="customer:email:customer_id=196">ALMA.AUSTIN@sakilacustomer.org</span>
                                                        </td>
                        <td>1074 Binzhou Manor Mannheim</td>
                            <td>
                                                        <span class="jedit-boolean tip" data-field="active" data-delay="500" title="Click to edit" id="customer:active:customer_id=196"><i class="fas fa-check icon-lg text-success"></i></span>
                                                        </td>
                        <td>14 February 2006 22:4 pm</td>
                        <td>15 February 2006 4:57 am</td>
                                                                        <td class="no-ellipsis">
                                                        <a class="dropdown-toggle text-nowrap" data-bs-toggle="collapse" href="#f-6634a0690bddb" rel="noindex" role="button" aria-expanded="false" aria-controls="f-6634a0690bddb"><small class="badge rounded-pill text-bg-light prepend">35</small><span class="show-external">Show</span><span class="hide-external">Hide</span></a>
                            <div class="collapse mt-2" id="f-6634a0690bddb">
                                
                                <table class="table table-sm">
                                    <thead class=" text-bg-dark">
                                        <tr>
                                                                                        <th>Rental date</th>
                                                                                        <th>Return date</th>
                                                                                    </tr>
                                    </thead>
                                    <tbody>

                                        
                                                                                <tr>

                                            
                                                                                        <td>2005-05-25 18:18:19</td>
                                                                                        <td>2005-06-04 00:01:19</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-26 04:21:46</td>
                                                                                        <td>2005-06-04 07:09:46</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-28 00:13:35</td>
                                                                                        <td>2005-05-29 00:11:35</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-05-31 07:12:44</td>
                                                                                        <td>2005-06-04 12:33:44</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 00:45:21</td>
                                                                                        <td>2005-06-22 03:52:21</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-15 12:45:30</td>
                                                                                        <td>2005-06-17 17:12:30</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-16 06:04:12</td>
                                                                                        <td>2005-06-19 09:39:12</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-19 12:15:27</td>
                                                                                        <td>2005-06-21 16:48:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-20 03:32:45</td>
                                                                                        <td>2005-06-21 23:32:45</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-20 17:06:46</td>
                                                                                        <td>2005-06-28 13:18:46</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-21 05:16:10</td>
                                                                                        <td>2005-06-27 10:46:10</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-06-21 10:46:36</td>
                                                                                        <td>2005-06-23 09:46:36</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-08 19:34:55</td>
                                                                                        <td>2005-07-09 15:53:55</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-09 01:12:57</td>
                                                                                        <td>2005-07-17 00:12:57</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-09 08:07:07</td>
                                                                                        <td>2005-07-18 10:17:07</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-09 18:04:29</td>
                                                                                        <td>2005-07-15 17:46:29</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-10 13:15:26</td>
                                                                                        <td>2005-07-15 09:42:26</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-12 19:53:30</td>
                                                                                        <td>2005-07-13 15:22:30</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-28 02:35:12</td>
                                                                                        <td>2005-08-05 05:43:12</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 01:20:16</td>
                                                                                        <td>2005-07-30 04:31:16</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 08:36:22</td>
                                                                                        <td>2005-08-02 07:55:22</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-29 16:56:01</td>
                                                                                        <td>2005-07-31 16:19:01</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-30 18:13:52</td>
                                                                                        <td>2005-08-03 17:58:52</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 08:28:46</td>
                                                                                        <td>2005-08-05 14:03:46</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 11:07:39</td>
                                                                                        <td>2005-08-09 11:57:39</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-07-31 21:29:28</td>
                                                                                        <td>2005-08-09 00:04:28</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-01 00:28:38</td>
                                                                                        <td>2005-08-06 02:23:38</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-02 08:09:58</td>
                                                                                        <td>2005-08-05 11:55:58</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 10:32:41</td>
                                                                                        <td>2005-08-22 16:16:41</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-18 19:51:27</td>
                                                                                        <td>2005-08-19 15:56:27</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-19 01:48:33</td>
                                                                                        <td>2005-08-23 04:46:33</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-20 12:36:42</td>
                                                                                        <td>2005-08-28 08:47:42</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 10:54:49</td>
                                                                                        <td>2005-08-26 08:28:49</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-21 20:49:58</td>
                                                                                        <td>2005-08-29 20:13:58</td>
                                                                                    </tr>
                                                                                <tr>

                                            
                                                                                        <td>2005-08-23 20:10:13</td>
                                                                                        <td>2005-08-24 17:44:13</td>
                                                                                    </tr>
                                                                            </tbody>
                                </table>
                            </div>
                                                    </td>
                                                                                            </tr>
                                    </tbody>
            </table>
        </div> <!-- END table-responsive -->

        
        <div id="pagination-wrapper" class="d-flex justify-content-between p-4">
            <ul class="pagination pagination-flat">
<li class="page-item disabled"><a class="page-link" href="#">Page</a></li><li class="page-item active"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="/admin/customer/p2">2</a></li>
<li class="page-item"><a class="page-link" href="/admin/customer/p3">3</a></li>
<li class="page-item"><a class="page-link" href="/admin/customer/p4">4</a></li>
<li class="page-item"><a class="page-link" href="/admin/customer/p5">5</a></li>
<li class="page-item"><a class="page-link" href="/admin/customer/p6">6</a></li>

<li class="page-item"><a class="page-link" href="/admin/customer/p2"><i class="fas fa-angle-right"></i></a></li>
<li class="page-item"><a class="page-link" href="/admin/customer/p30"><i class="fas fa-angle-double-right"></i></a></li>

</ul>
<div class="heading-elements pt-2 pr-3">
<p class="text-right text-semibold">Results 1 to 20 of 599</p>
</div>

        </div>
    </div> <!-- END customer-list -->

        
</div> <!-- END card -->
        </div> <!-- end content-wrapper -->
    </div> <!-- end container -->
    <div id="loader">
        <div class="spinner"></div>
    </div>
    

<section class="bg-light-200 border-top text-center text-md-left">
    <div class="container">

        <article>

            <h2 class="pt-4 pb-3">About the current <em>Customer</em> data list</h2>
            <p>The MySQL records displayed on this page are extracted from the "<em>customer</em>" table.</p>
            <p>Table <em>customer</em> is structured as follows:</p>

            <table class="table table-condensed table-striped mb-5">
                <thead>
                    <tr>
                        <th>Field name</th>
                        <th>Displayed name</th>
                        <th>Extra</th>
                    </tr>
                </thead>
                <tbody>
                                        <tr>
                        <td>customer_id</td>
                        <td>Customer id</td>
                        <td></td>

                    </tr>
                                        <tr>
                        <td>store_id</td>
                        <td>Store</td>
                        <td></td>

                    </tr>
                                        <tr>
                        <td>first_name</td>
                        <td>First name</td>
                        <td></td>

                    </tr>
                                        <tr>
                        <td>last_name</td>
                        <td>Last name</td>
                        <td></td>

                    </tr>
                                        <tr>
                        <td>email</td>
                        <td>Email</td>
                        <td></td>

                    </tr>
                                        <tr>
                        <td>address_id</td>
                        <td>Address</td>
                        <td></td>

                    </tr>
                                        <tr>
                        <td>active</td>
                        <td>Active</td>
                        <td></td>

                    </tr>
                                        <tr>
                        <td>create_date</td>
                        <td>Create date</td>
                        <td></td>

                    </tr>
                                        <tr>
                        <td>last_update</td>
                        <td>Last update</td>
                        <td></td>

                    </tr>
                                    </tbody>
            </table>

        </article>

        <hr class="my-5">

        <article>

            <h1>PHP CRUD - <em>customer</em> records list</h1>

            <h2>Informations about the database PDO query:</h2>

            <ul class="list-unstyled">
                <li>The records are ordered by <strong> customer.last_name ASC</strong></li>
                <li> records are displayed on each page</li>
            </ul>
                        <p>The customer list uses 1 external relational table(s).</p>
            <p>The records of the external relational table(s) are displayed in nested table(s).</p>
                    </article>

        <hr class="my-5">

        <article class="mb-5">

            <h2>Create your own CRUD Application from your Database</h2>
            <p class="lead">This Bootstrap Dashboard has been entirely designed with PHP CRUD Generator.</p>

            <p>The current admin page lists the records of the <em>customer</em> table.<br>
                PHP CRUD Generator allows to build this type of PHP admin dashboard in a very simple way and without programming.<br>
                The <a href="https://www.phpcrudgenerator.com/tutorials/what-is-a-crud" title="What is CRUD?">CRUD application</a> analyzes your SQL database and extracts all its components: tables, relationships, fields, primary and secondary keys, field and data types, ...<br>
                The CRUD system is able to generate an admin dashboard such as this one from any MySQL database, no matter how complex it is.</p>

            <p>PHP CRUD Generator is available at a very low price <a href="https://1.envato.market/xabod" title="Buy PHP CRUD Generator on Codecanyon">here on Codecanyon</a>.<br>
                1 license = 1 project, no recurring payments, 6 months of support included, a professional web application, no known bugs, ... and tons of work saved.</p>
        </article>
    </div>
</section>

<footer class="bg-dark text-light text-center">
    <div class="container-fluid bg-gray-600">
        <div class="row">
            <div class="col-sm-6 col-md-4 pb-3">

                <h3 class="py-3">About PHP CRUD System</h3>

                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.phpcrudgenerator.com/tutorials/what-is-a-crud" class="text-light" title="PHP CRUD Tutorial - What is CRUD?">What is CRUD?</a>
                    </li>
                    <li>
                        <a href="https://www.phpcrudgenerator.com/tutorials/what-is-php-crud-generator" class="text-light" title="PHP CRUD Tutorial - What is PHP CRUD Generator?">What is PHP CRUD Generator?</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-4 pb-3 border-left border-right border-gray-700">

                <h3 class="py-3">Quick Start</h3>

                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.phpcrudgenerator.com/tutorials/php-crud-application-tutorial" class="text-light" title="PHP CRUD Tutorial - Create your Bootstrap CRUD Admin Dashboard">Create your Bootstrap CRUD Admin Dashboard</a>
                    </li>
                    <li>
                        <a href="https://www.phpcrudgenerator.com/documentation/index" class="text-light" title="PHP CRUD Generator - Documentation">PHP CRUD - Documentation</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-4 pb-3">

                <h3 class="py-3">MySQL database tutorials</h3>

                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.phpcrudgenerator.com/tutorials/requirements-and-good-practices" class="text-light" title="PHP CRUD Tutorial - MySQL Database g">MySQL Database - good practices</a>
                    </li>
                    <li>
                        <a href="https://www.phpcrudgenerator.com/tutorials/how-to-build-up-your-database-with-mysql-workbench" class="text-light" title="PHP CRUD Tutorial - Build up your database with MySQL Workbench">Build up your database with MySQL Workbench</a>
                    </li>
                </ul>
            </div>
            <div class="col d-flex justify-content-center py-2 bg-gray-700">
                <a href="https://www.facebook.com/miglisoft/" class="d-block px-4 text-light" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/miglisoft" class="d-block px-4 text-light" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="https://github.com/migliori" class="d-block px-4 text-light"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </div>
    <p class="py-2 mb-0 bg-gray-800">www.phpcrudgenerator.com 2024 - PHPCG</p>
</footer>
<div class="offcanvas offcanvas-end" tabindex="-1" id="style-switcher-wrapper" aria-labelledby="style-switcher-label">
    <div class="offcanvas-header">
        <p class="h5 offcanvas-title" id="style-switcher-label">Customise the theme and navigation bars</p>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body"></div>
</div>
<script src="https://www.phpcrudgenerator.com/admin/assets/javascripts/loadjs.min.js"></script>
<script>
    const adminUrl = 'https://www.phpcrudgenerator.com/admin/';
    const classUrl = 'https://www.phpcrudgenerator.com/class/';
    const datetimepickersStyle = 'default';
</script>
<script src="https://www.phpcrudgenerator.com/admin/assets/javascripts/project.min.js"></script>
<script async defer src="https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/ajax-data-loader/ajax-data-loader.min.js"></script>
<script>
    /* global variables & functions
    -------------------------------------------------- */

    let nestedContent = {};

    let overlayScrollbarInstance;

    let isSearchResultsList = false;

    const footableParser = function(valueOrElement) {
        return $(valueOrElement).html();
    };

    const initTimeout = function(tableTogglableWidth) {

        // we have to wait until table-togglable reaches its final size
        setTimeout(function() {
            let newWidth = $('.table-togglable').width();
            if (newWidth == tableTogglableWidth) {
                init();
            } else {
                initTimeout(newWidth);
            }
        }, 50);
    };

    // init all events AFTER footable if $('.table-data')[0]
    const init = function() {

        // Sorting
        if ($('.sorting')[0]) {
            if (!isSearchResultsList) {
                $('.sorting').each(function() {
                    $(this).find('a').on('click', function(e) {
                        e.preventDefault();
                        let dataField = $(this).attr('data-field'),
                            dataDirection = $(this).attr('data-direction');
                        $.ajax({
                            url: 'https://www.phpcrudgenerator.com/admin/inc/sorting.php',
                            type: 'GET',
                            data: {
                                'dataTable': 'customer',
                                'dataField': dataField,
                                'dataDirection': dataDirection
                            }
                        }).done(function(data) {
                                setTimeout(function() {
                                    window.location.reload();
                                }, 200);

                            return false;
                        }).fail(function(data, statut, error) {
                            console.log(error);
                        });
                    })
                });
            } else {
                $('a[class^="sorting-"]').css({'opacity': 0, 'cursor': 'default'}).on('click', function(e) {
                    e.preventDefault();
                    return false;
                });
            }
        }

        if (!isSearchResultsList) {
            loadjs([
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/frameworks/all-frameworks.min.css',
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/slimselect/slimselect.min.css',
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/slimselect/slimselect.min.js',
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/slimselect/themes/bootstrap5.min.css',
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/litepicker/litepicker.min.js'
                ], 'bundleC',
                {
                    async: false
                }
            );

            loadjs([
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/pickadate/lib/compressed/picker.js',
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/pickadate/lib/compressed/picker.date.js',
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/pickadate/lib/compressed/picker.time.js',
                'https://www.phpcrudgenerator.com/admin/assets/javascripts/plugins/jeditable.min.js',
                ], 'bundleD',
                {
                    async: false
                }
            );

            loadjs([
                'https://www.phpcrudgenerator.com/admin/assets/javascripts/plugins/jquery.autocomplete.min.js',
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/ladda/ladda-themeless.min.css',
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/ladda/spin.min.js',
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/ladda/ladda.min.js',
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/pretty-checkbox/pretty-checkbox.min.css',
                'https://www.phpcrudgenerator.com/class/phpformbuilder/plugins/pretty-checkbox/phpfb-pretty-checkbox.js'
                ], 'bundleG',
                {
                    async: false
                }
            );
        } else {
            initbundleD();
            initBundleF();
        }
    };

    
    loadjs.ready('core', function() {
        loadjs([
            'https://www.phpcrudgenerator.com/admin/assets/javascripts/plugins/moment.min.js',
            'https://www.phpcrudgenerator.com/admin/assets/javascripts/plugins/footable.min.js'
            ], 'bundleA',
            {
                async: false
            }
        );

        // Number/page
        if ($('#npp')[0]) {
            $('#npp').on('change', function () {
                $('#npp-form').submit();
            });
        }

        // auto-enable filters
        if ($('#filters-list')[0]) {
            if ($('#filters-list').hasClass('auto-enable-filters')) {
                $('#filters-list select').on('change', function() {
                    $('#filters-list').submit();
                });
            }
        }
    });

    
    const initBundleA = function() {
        // extract nested tables
        let index = 0,
            $nested = $('.table-data td table');
        nestedContent = {
            id: [],
            html: []
        };
        $nested.each(function() {
            $(this).addClass('nested-table');
            let $parentTd = $(this).closest('td'),
                parentTdHtml = $parentTd.html();
            nestedContent.id[index] = 'has-nested' + index;
            nestedContent.html[index] = parentTdHtml;
            $parentTd.attr('id', 'has-nested' + index).html('');
            index ++;
        });
        if ($('.table-togglable')[0]) {
            $('.table-togglable').find('tbody > tr').each(function() {
                $(this).css('background-color', $(this).css('background-color'));
            });

            $('.table-togglable').on({
                "ready.ft.table": function(e, ft){
                    // bind to the plugin initialize event to do something
                    $('.footable-toggle').css('cursor', 'pointer');

                    // init all events AFTER footable
                    initTimeout($('.table-togglable').width());
                }
            }).footable();
        } else {
            init();
        }
    };

    loadjs.ready(['core', 'bundleA'], initBundleA);

        const initBundleC = function() {
        // tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl, {delay: { "show": 750, "hide": 100 }})
        });
        if ($('#filters-list')[0]) {
            document.querySelectorAll('[data-slimselect="true"]').forEach(el => {
                const dataAllowDeselect = el.dataset.allowDeselect === undefined?false:el.dataset.allowDeselect !== 'false';
                const dataAllowDeselectOption = el.dataset.allowDeselectOption === undefined?true:el.dataset.allowDeselectOption !== 'false';
                const dataPlaceholder = el.dataset.placeholder === undefined?null:el.dataset.placeholder;
                const dataShowSearch = el.dataset.showSearch === undefined?true:el.dataset.showSearch !== 'false';
                new SlimSelect({
                    select: el,
                    allowDeselect: dataAllowDeselect,
                    allowDeselectOption : dataAllowDeselectOption,
                    deselectLabel: '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 460.775 460.775" width=".75em" height=".5em" fill="#3F6078" xml:space="preserve"> <path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55  c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55  c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505  c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55  l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719  c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"/></svg>',
                    placeholder: dataPlaceholder,
                    showSearch : dataShowSearch
                });
            });
            // daterange filters
            if ($('#filters-list .litepick')[0]) {
                $('#filters-list .litepick').each(function() {
                    var inputId = $(this).prop('id'),
                        minDate = $(this).attr('data-min-date'),
                        maxDate = $(this).attr('data-max-date'),
                        minDateObject = new Date($(this).attr('data-min-date')),
                        maxDateObject = new Date($(this).attr('data-max-date')),
                        minYear = parseInt(minDateObject.getFullYear()),
                        maxYear = parseInt(maxDateObject.getFullYear()),
                        minMonth = parseInt(minDateObject.getMonth()),
                        maxMonth = parseInt(maxDateObject.getMonth());

                    var yearsDropdown = false;
                    if (maxYear - minYear > 0) {
                        yearsDropdown = true;
                    }

                    var lp = new Litepicker({
                        element: document.getElementById(inputId),
                        singleMode: false,
                        numberOfMonths: 2,
                        numberOfColumns: 2,
                        lang: 'fr-FR',
                        minDate: $(this).attr('data-min-date'),
                        maxDate: $(this).attr('data-max-date'),
                        useResetBtn: true,
                        buttonText: {
                            reset: 'Reset<i class="far fa-window-close fa-2x text-danger ms-2"></i>'
                        },
                        onShow: function() {
                            if (this.getDate() === null) {
                                this.gotoDate(minDateObject, 0);
                                this.gotoDate(maxDateObject, 1);
                            }
                        },
                        // startDate: $(this).attr('data-min-date'),
                        // endDate: $(this).attr('data-max-date'),
                        splitView: true,
                        dropdowns: {
                            minYear: minYear,
                            maxYear: maxYear,
                            months: true,
                            years: yearsDropdown,
                        }
                    });
                });
            }
            // ajax filters
            if ($('#filters-list .ajax-filter')[0]) {
                document.querySelectorAll('#filters-list .ajax-filter').forEach(el => {
                    const dataAllowDeselect = el.dataset.allowDeselect === undefined?false:el.dataset.allowDeselect !== 'false';
                    const dataAllowDeselectOption = el.dataset.allowDeselectOption === undefined?true:el.dataset.allowDeselectOption !== 'false';
                    const dataPlaceholder = el.dataset.placeholder === undefined?null:el.dataset.placeholder;
                    new SlimSelect({
                        select: el,
                        allowDeselect: dataAllowDeselect,
                        allowDeselectOption : dataAllowDeselectOption,
                        deselectLabel: '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 460.775 460.775" width=".75em" height=".5em" fill="#3F6078" xml:space="preserve"> <path d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55  c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55  c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505  c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55  l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719  c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z"/></svg>',
                        placeholder: dataPlaceholder,
                        searchText: 'Search',
                        searchingText: 'Searching ...',
                        ajax: function (search, callback) {
                            // Check search value. If you dont like it callback(false) or callback('Message String')
                            if (search.length < 2) {
                                callback('Type 2 or more characters');
                                return;
                            }

                            // Perform your own ajax request here
                            const formData = new FormData();
                            formData.append('selectname', el.id);
                            formData.append('search', search);
                            formData.append('page', 1);
                            fetch('https://www.phpcrudgenerator.com/admin/inc/ajax-filter.php', {
                                method: 'POST',
                                credentials: 'same-origin',
                                cache: 'no-cache',
                                mode: 'same-origin',
                                body: formData
                            })
                            .then(function (response) {
                                return response.json()
                            })
                            .then(function (json) {
                                let data = [];
                                json.results.forEach(res => {
                                    data.push({
                                        text: res.text,
                                        value: res.id
                                    });
                                });
                                if (json.debugAjaxContent[0] && $('#debug-content')[0]) {
                                    $('#debug-content').css('opacity', '0').html(json.debugAjaxContent).animate({'opacity': '1'}, {duration: 600});
                                }

                                // Upon successful fetch send data to callback function.
                                // Be sure to send data back in the proper format.
                                // Refer to the method setData for examples of proper format.
                                callback(data)
                            })
                            .catch(function(error) {
                                // If any erros happened send false back through the callback
                                callback(false)
                            })
                        }
                    });
                });
            }
        }
    };
    loadjs.ready(['core', 'bundleA', 'bundleC'], initBundleC);

        const initbundleD = function() {
        // EDIT IN PLACE - TEXT INPUTS
        $('.jedit-text').editable('https://www.phpcrudgenerator.com/admin/inc/jedit.php', {
            cssclass: 'form-horizontal',
            type   : 'text',
            indicator     : '<img src="https://www.phpcrudgenerator.com/admin/assets/images/ajax-loader.svg" alt="Recording ...">',
            cancel        : 'Cancel',
            submit        : 'Ok',
            onblur        : 'ignore',
            onsubmit: function() {
                $(this).closest('[class^="jedit-"]').removeClass('active');
            },
            onreset: function() {
                $(this).closest('[class^="jedit-"]').removeClass('active');
            },
            callback     : function (value, settings) {
                $(this).html(value.replace(/<script(\n?\r?.*)+<\/script>/gm, '').trim());
            }
        });

        $('.jedit-textarea').editable('https://www.phpcrudgenerator.com/admin/inc/jedit.php', {
            cssclass: 'form-horizontal',
            type      : 'textarea',
            indicator     : '<img src="https://www.phpcrudgenerator.com/admin/assets/images/ajax-loader.svg" alt="Recording ...">',
            rows    : 5,
            cols    : 30,
            indicator : '<img src="https://www.phpcrudgenerator.com/admin/assets/images/ajax-loader.svg" alt="Recording ...">',
            cancel        : 'Cancel',
            submit        : 'Ok',
            onblur        : 'ignore',
            onsubmit: function() {
                $(this).closest('[class^="jedit-"]').removeClass('active');
            },
            onreset: function() {
                $(this).closest('[class^="jedit-"]').removeClass('active');
            },
            callback     : function (value, settings) {
                $(this).html(value);
            }
        });

        // EDIT IN PLACE - BOOLEAN
        $('.jedit-boolean').editable('https://www.phpcrudgenerator.com/admin/inc/jedit.php', {
            cssclass      : 'form-inline',
            type          : 'select',
            data    : {"1":"Yes","0":"No","selected":"1"},
            indicator     : '<img src="https://www.phpcrudgenerator.com/admin/assets/images/ajax-loader.svg" alt="Recording ...">',
            cancel        : 'Cancel',
            submit        : '<button type="submit" class="btn btn-primary btn-xs mt-2">Ok</button>',
            onblur        : 'ignore',
            onsubmit      : function() {
                $(this).closest('[class^="jedit-"]').removeClass('active');
            },
            onreset       : function() {
                $(this).closest('[class^="jedit-"]').removeClass('active');
            },
            callback      : function (value, settings) {
                if (value > 0) {
                    $(this).html('<svg class="svg-inline--fa fa-check fa-w-16 icon-lg text-success" width="1em" aria-hidden="true" data-fa-processed="" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg>');
                    // $(this).html('Yes');
                } else {
                    $(this).html('<svg class="svg-inline--fa fa-times fa-w-12 icon-md text-danger" width="1em" aria-hidden="true" data-fa-processed="" data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M323.1 441l53.9-53.9c9.4-9.4 9.4-24.5 0-33.9L279.8 256l97.2-97.2c9.4-9.4 9.4-24.5 0-33.9L323.1 71c-9.4-9.4-24.5-9.4-33.9 0L192 168.2 94.8 71c-9.4-9.4-24.5-9.4-33.9 0L7 124.9c-9.4 9.4-9.4 24.5 0 33.9l97.2 97.2L7 353.2c-9.4 9.4-9.4 24.5 0 33.9L60.9 441c9.4 9.4 24.5 9.4 33.9 0l97.2-97.2 97.2 97.2c9.3 9.3 24.5 9.3 33.9 0z"></path></svg>');
                    // $(this).html('No');
                }
            }
        });

        // EDIT IN PLACE - SELECT (from vendor/twig/twig/src/Extension/CrudTwigExtension.php)
        


        // EDIT IN PLACE - DATES
        $('.jedit-date').editable('https://www.phpcrudgenerator.com/admin/inc/jedit.php', {
            cssclass: 'form-inline',
            type   : 'pickadate',
            indicator     : '<img src="https://www.phpcrudgenerator.com/admin/assets/images/ajax-loader.svg" alt="Recording ...">',
            cancel        : '',
            submit        : '',
            submitdata    : function (value, settings) {
                return { "value_submit": $('input[name="value_submit"]').val() };
            },
            onblur        : 'ignore',
            onsubmit: function() {
                $(this).closest('[class^="jedit-"]').removeClass('active');
            },
            onreset: function() {
                $(this).closest('[class^="jedit-"]').removeClass('active');
            },
            callback     : function (value, settings) {
                $(this).html(value);
            }
        });
    };
    loadjs.ready(['core', 'bundleA', 'bundleD'], initbundleD);
        const initBundleF = function() {
        const getAvailableHeight = function() {
            let availableHeight = 500; // set default minimal height
            if ($('#navbar-main')[0] && $('#breadcrumb')[0] && $('#toolbar')[0] && $('#msg')[0] && $('#pagination-wrapper')[0]) {
                    let navbarHeight  = $('#navbar-main').outerHeight(true),
                    breadcrumbHeight  = $('#breadcrumb').outerHeight(true),
                    msgHeight         = $('#msg').outerHeight(true),
                    paginationHeight  = $('#pagination-wrapper').outerHeight(true),
                    toolbarHeight     = $('#toolbar').outerHeight(true);

                availableHeight = $(window).height() - navbarHeight - breadcrumbHeight - msgHeight - paginationHeight - toolbarHeight;
            }


            return availableHeight;
        };

        const reinsertNestedContent = function(nestedContent) {

            // get nested tables back once footable has done its job
            for (let i = 0; i < nestedContent.id.length; i++) {
                $('#' + nestedContent.id[i]).html(nestedContent.html[i]);
            }
        };

        const initTable = function() {
            let $tableData = $('.table-data'),
                $tableResponsive = $tableData.closest('.table-data-wrapper'),
                tableDataWidth = $tableData.width(),
                tableResponsiveWidth = $tableResponsive.width();
                                const dataTablesVerticalScrollbar = true;
                let availableHeight = getAvailableHeight();
                $('.table-data-wrapper').css('height', availableHeight + 'px');
                            if (tableDataWidth > tableResponsiveWidth || dataTablesVerticalScrollbar) {
                    overlayScrollbarInstance = $('.table-data-wrapper').overlayScrollbars({
                    resize: 'vertical',
                    paddingAbsolute: true,
                    autoUpdate: true,
                    className : "os-theme-round-dark",
                    scrollbars : {
                        clickScrolling: true,
                    }
                }).overlayScrollbars();
                $('.table-data-wrapper .collapse').on('shown.bs.collapse', function() {
                    overlayScrollbarInstance.scroll({
                        el       : $('#' + $(this).attr('id')),
                        scroll   : ['ifneeded', 'never'],
                        block    : 'nearest',
                        margin   : 40
                    });
                }).on('hide.bs.collapse', function() {
                   // overlayScrollbarInstance.update();
                });

                $(window).on('resize', () => {
                    overlayScrollbarInstance.update();
                })
            }
        };

        if ($('.nested-wrapper')[0]) {
            $('.nested-wrapper').slideUp();
            $('.toggle-nested').each(function() {
                $(this).on('click', function() {
                    $(this).siblings('.nested-wrapper').slideToggle();
                });
            });
        }
        if (typeof(nestedContent.id) != 'undefined') {
            reinsertNestedContent(nestedContent);
        }
        initTable();
    };
    loadjs.ready(['core', 'bundleA'], initBundleF);

        const initBundleG = function() {
        if ($('#rp-search-form')[0]) {
            const l = Ladda.create( document.querySelector('#rp-search-submit'));
            if (!$('#rp-search-field a.dropdown-item.active')[0]) {
                $('#rp-search-field a.dropdown-item:first-child').addClass('active');
            }
            let selectedOption = {
                name: $('#rp-search-field a.dropdown-item.active').text(),
                value: $('#rp-search-field a.dropdown-item.active').data('value')
            };
            let autocompleteLoaded = false;
            const initAutocomplete = function() {
                $('#rp-search').autocomplete({
                    serviceUrl: 'https://www.phpcrudgenerator.com/admin/inc/search-autocomplete.php',
                    paramName: 'search_string',
                    minChars: 2,
                    noCache: true,
                    showNoSuggestionNotice: true,
                    noSuggestionNotice: 'No result found',
                    params: {
                        item: 'customer',
                        search_field: selectedOption.value,
                        is_autocomplete: true
                    },
                    transformResult: function(response, originalQuery) {
                        const json_response = $.parseJSON(response);
                        if (json_response.debugAjaxContent[0] && $('#debug-content')[0]) {
                            $('#debug-content').css('opacity', '0').html(json_response.debugAjaxContent).animate({'opacity': '1'}, {duration: 600})
                        }

                        return json_response;
                    },
                    onSelect: function (suggestion) {
                        $('#rp-search-form').submit();
                    },
                    onSearchStart: function (query) {
                        l.start();
                    },
                    onSearchComplete: function (query, suggestions) {
                        l.stop();
                    },
                    onSearchError: function (query, jqXHR, textStatus, errorThrown) {
                        console.log(errorThrown);
                        l.stop();
                    },
                    type: 'POST',
                    deferRequestBy: 400
                });
                $('#rp-search').attr('placeholder', 'Search ' + selectedOption.name);
                autocompleteLoaded = true;
            };

            const addResetSearchButton = function() {
                if ($('#reset-search').length < 1 && $('#rp-search').val().length > 0) {
                    $('#rp-search-submit').before('<button id="reset-search" class="btn btn-warning" type="button" title="Reset"><i class="fas fa-xmark"></i></button>');
                    $('#reset-search').on('click', function() {
                        // reset session values
                        $.ajax({
                            url: 'https://www.phpcrudgenerator.com/admin/inc/search-reset.php',
                            type: 'POST',
                            data: {
                                table: 'customer'
                            }
                        }).done(function(data) {
                            location.reload();
                        }).fail(function(data, statut, error) {
                                console.log(error);
                        });
                    });
                }
            };

            $('#rp-search-field a.dropdown-item').on('click', function(e) {
                $('#rp-search-field a.dropdown-item').removeClass('active');
                $(e.target).addClass('active');
                selectedOption.name = $(e.target).text();
                selectedOption.value = $(e.target).data('value');
                initAutocomplete();
            });

            $('#rp-search-field a.dropdown-item.active').trigger('click');

            $('#rp-search-form').on('submit', function(e) {
                e.preventDefault();
                l.start();
                const target = $('#customer-list').parent('div');
                $.ajax({
                        url: 'https://www.phpcrudgenerator.com/admin/search/customer',
                        type: 'POST',
                        data: {
                            search_field: selectedOption.value,
                            search_string: $('#rp-search').val()
                        }
                }).done(function(data) {
                    l.stop();
                    data = JSON.parse(data);
                    $('#customer-list').html($(data.template).html());
                    if (data.debugAjaxContent[0] && $('#debug-content')[0]) {
                        $('#debug-content').css('opacity', '0').html(data.debugAjaxContent).animate({'opacity': '1'}, {duration: 600});
                    }
                    isSearchResultsList = true;
                    initBundleA();
                    initBundleG();
                    addResetSearchButton();
                }).fail(function(data, statut, error) {
                        console.log(error);
                });
                return false;
            });

            addResetSearchButton();
        }

                if ($('#bulk-delete-btn')[0]) {
            const prettyOptions = {
                prettyWrapper  : {
                    baseClass      : 'pretty',
                    defaultClass   : 'p-icon',
                    checkboxStyle  : 'p-1',
                    radioStyle     : '',
                    fill           : '',
                    plain          : 'p-plain',
                    animations     : 'p-smooth',
                    size           : 'bigger',
                },
                labelWrapper   : {
                    color          : 'p-',
                    icon           : '',
                },
                toggle         : true,
                toggleOn: {
                    label: '',
                    color: 'text-success',
                    icon : 'fas fa-check'
                },
                toggleOff: {
                    label: '',
                    color: 'text-dark',
                    icon : 'fas fa-xmark'
                }
            };
            new PrettyCheckbox('.table-data', prettyOptions);
            $('#bulk-check-toggle').on('click', function() {
                var checkBoxes = $('.bulk-check');
                checkBoxes.prop('checked', !checkBoxes.prop('checked'));
                if (checkBoxes.prop('checked')) {
                    $('.table-data tbody tr').addClass('bulk-checked');
                } else {
                    $('.table-data tbody tr').removeClass('bulk-checked');
                }
            });

            $('.bulk-check').on('click', function() {
                $(this).closest('tr').toggleClass('bulk-checked');
            });

            $('#bulk-delete-modal').modal();

            $('#bulk-delete-btn').on('click', function() {
                var records = [];
                $(".bulk-check:checked").each(function() {
                    records.push($(this).attr('data-id'));
                });
                if (records.length < 1) {
                    alert('No record selected');
                    return false;
                }
                $('#bulk-delete-modal #records-count').text(records.length);
                $('#bulk-delete-modal').modal('open');
                $('#bulk-delete-confirm-btn').on('click', function() {
                    $.ajax({
                        url: 'https://www.phpcrudgenerator.com/admin/inc/forms/customer-bulk-delete.php',
                        type: 'POST',
                        data: {
                            'records': records
                        }
                    }).done(function(data, statut, error) {
                        $('#bulk-delete-modal').modal('close');
                        $('#msg').html(data);
                        if (!('#debug-db-queries-is-enabled')[0]) {
                            records.forEach(function(rid) {
                                document.getElementById('bulk-check-' + rid).closest('tr').remove();
                            });
                        }
                        $([document.documentElement, document.body]).animate({ scrollTop: $("#msg .alert").offset().top }, 400);
                    }).fail(function(data, statut, error) {
                        console.log(error);
                    });
                });

            });
        }

                if ($('.btn-view-record')[0]) {
            const $modalTarget = $('#single-record-view-modal .modal-content');
            $('#single-record-view-modal').modal();
            $('.btn-view-record').each(function() {
                $(this).on('click', () => {
                    const l = Ladda.create( document.querySelector('a[data-target="' + $(this).attr('data-target') + '"]'));
                    l.start();
                    $.ajax({
                            url: 'https://www.phpcrudgenerator.com/admin/' + $(this).attr('data-target'),
                            type: 'GET'
                    }).done(function(data) {
                        l.stop();
                        $modalTarget.html(data);
                            $('#single-record-view-modal').modal('open');
                    }).fail(function(data, statut, error) {
                            console.log(error);
                    });
                    return false;
                });
            });
        }
    }
    loadjs.ready(['core', 'bundleG'], initBundleG);

    </script>

    <!-- Single record view Modal -->

    <div id="single-record-view-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content"></div>
        </div>
    </div>
</body>

</html>
