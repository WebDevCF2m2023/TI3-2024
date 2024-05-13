<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <title>Admin Delete</title>
</head>
<body>
<div class="container">
        <div id="toolbar">
            <button id="remove" class="btn btn-danger bi bi-trash" disabled>
                Remove
            </button>
          </div>
        <table 
            id="table"
            class="table table-striped"
            data-toggle="table"
            data-toolbar="#toolbar"
            data-show-export="true"
            data-click-to-select="true"
            data-pagination="true"
            data-page-list="[2,4,6,8]"
            data-minimum-count-columns="2"
            data-show-columns="true"
            data-show-columns-toggle-all="true"
            >
    <h1>Admin Delete</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil Admin</a></li>
            <li><a href="?insert">Ajouter une data</a></li>
            <li><a href="?disconnect">Déconnexion</a>       
        </ul>
    </nav>
    
    <div class="content">
        <h2>Delete d'une data</h2>
        <?php if(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php endif ?>
        <input type="number"  name="id" placeholder="id" value="<?=$data['id']?>" disabled><br>
        <input type="text" name="title" placeholder="title" value="<?=$data['nom']?>" disabled><br>
        <textarea name="ourdesc" placeholder="Descrition" disabled><?=$data['adresse']?></textarea><br>
        <input type="number"  name="codepostal" placeholder="codepostal" value="<?=$data['codepostal']?>" disabled><br>
        <input type="number" step="0.0000001" name="latitude" placeholder="latitude" value="<?=$data['latitude']?>" disabled><br>
        <input type="number" step="0.0000001" name="longitude" placeholder="longitude" value="<?=$data['longitude']?>" disabled><br>
        <a href="?delete=<?=$idDelete?>&ok"><button>Supprimer</button></a> | <a href="./"><button>Ne pas supprimer</button></a>

    </div>
</body>
</html>
<thead>
                <tr>
                    <th data-checkbox="true" data-field="state"></th>
                    <th data-field="id">ID</th>
                    <div class="content">
        <?php if(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php endif ?>
        <input type="number"  name="id" placeholder="id" value="<?=$data['id']?>" disabled><br>
        <input type="text" name="title" placeholder="title" value="<?=$data['nom']?>" disabled><br>
        <textarea name="ourdesc" placeholder="Descrition" disabled><?=$data['adresse']?></textarea><br>
        <input type="number"  name="codepostal" placeholder="codepostal" value="<?=$data['codepostal']?>" disabled><br>
        <input type="number" step="0.0000001" name="latitude" placeholder="latitude" value="<?=$data['latitude']?>" disabled><br>
        <input type="number" step="0.0000001" name="longitude" placeholder="longitude" value="<?=$data['longitude']?>" disabled><br>
        <a href="?delete=<?=$idDelete?>&ok"><button>Supprimer</button></a> | <a href="./"><button>Ne pas supprimer</button></a>
                    <th data-events="operateEvents">Actions</th>
                </tr>
            </thead>
            <body>
                
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            const $table = $('#table');
            const $remove = $('#remove');
            let selections;
            window.operateEvents = {
                'click .remove': function (e, value, row, index) {
                    if(confirm(`Êtes-vous sûre de vouloir supprimer l'élément avec comme ID ${row.id} ?`))
                        $table.bootstrapTable('remove', {
                            field: 'id',
                            values: [row.id]
                        })
                },
                'click .edit': function (e, value, row, index) {
                    console.log(e);
                    console.log(value);
                    console.log(row);
                    console.log(index);
                }
            }
            $table.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function () {
                    $remove.prop('disabled', !$table.bootstrapTable('getSelections').length);
                    selections = getIdSelections();
                }
            )
            $remove.click(function () {
                if(confirm(`Êtes-vous sûre de vouloir supprimer ces éléments ?`)){
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: selections
                    });
                    $remove.prop('disabled', true);
                }
             })
            function getIdSelections() {
                return $.map($table.bootstrapTable('getSelections'), function (row) {
                    return row.id;
                })
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.28.0/tableExport.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.22.4/dist/bootstrap-table.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/bootstrap-table-locale-all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/extensions/export/bootstrap-table-export.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>


        ----------------------------------------------------------------------------------------------------------------------------------------------------

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
                <div id="customerData" class="sidebar-category active">
                    <div class="category-title nav-link">
            <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#sidebarCustomerDataNav" role="button" aria-expanded="true" aria-controls="sidebarCustomerDataNav">Customer data</a>
        </div>
                                                            <div class="category-content collapse show" id="sidebarCustomerDataNav">
                            
            <ul class="navbar-nav flex-column py-0">
                                                <li class="nav-item">
                                        <a href="https://www.phpcrudgenerator.com/admin/customer" title="Customer"  class="nav-link d-flex align-items-center">
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
                <li class="breadcrumb-item active" aria-current="page"><i class="fas fa-house-chimney"></i></li>
            </ol>
</nav>            <!-- shows all the user messages -->
            <div id="msg" class="mx-4"></div>
            <div class="font-size-base-md mt-n3 px-4">
            <p class="d-md-flex justify-content-end pb-3">
            <a href="https://www.phpcrudgenerator.com/crud-generator-demo?lang=en" class="btn btn-warning mb-2 mb-md-0 me-2" title="Switch to the CRUD Generator"><i class="fas fa-angle-left prepend"></i>Switch to the CRUD Generator</a>
            <button class="btn btn-outline-secondary" title="Switch to the Bootstrap Admin Dashboard" disabled>Switch to the Admin Dashboard<i class="fas fa-angle-right append"></i></button>
        </p>
        
    <div id="charts" class="row"></div>

        <h1 class="alert-heading">Bootstrap Admin Dashboard Demo - Sakila database</h1> <p>You are here in the <strong>Bootstrap admin Dashboard</strong> generated by <a href="https://www.phpcrudgenerator.com/crud-generator-demo?lang=en">PHP CRUD generator</a> from the MySQL demo Sakila database.</p> <p>With PHP CRUD Generator you can build this kind of website admin Dashboard in a few minutes, without programming.</p> <hr> <p class="lead">Here you can view and manage all your website content using the CRUD App. functionalities.</p> <p>This admin panel uses a <strong>MySQL relational database</strong>, but PHP CRUD Generator works just as well with <strong>MariaDB</strong>, <strong>Oracle</strong>, <strong>Firebird</strong> and <strong>PostgreSQL</strong> databases.</p> <p><strong>PHPCG</strong> uses the <a href="https://dev.mysql.com/doc/sakila/en/" target="_blank" title="SAKILA Database" rel="noopener noreferrer nofollow"><em>SAKILA Database</em></a>, which is provided with the package for demo purposes.</p> <p>The <em>SAKILA database</em> is composed of many different types of fields, internal, external, one-to-one, one-to-many relationships, and thus allows in-depth testing of the functionalities offered by PHPCG.</p> <p>The different tables have been grouped into 3 categories: <em>Customer Data</em>, <em>Inventory</em> and <em>Business</em>.</p> <p>The various read lists will give you an overview of the power of PHPCG.</p> <p>They have all been generated natively, without any customization and include:</p> <ul> <li>Internal/external filters</li> <li>Nested tables</li> <li>Expandable data</li> <li>Edition in place</li> <li>Sort by columns</li> <li>Excel/CSV/PDF/PRINT export</li> <li>Configurable pagination</li> </ul> <p>The <em>ADD</em>/<em>EDIT</em>/<em>REMOVE</em> forms are also generated using only native PHPCG features and use the best jQuery plugins for a better user experience.</p> <p>In real life, all this is protected by the <a href="https://www.phpcrudgenerator.com/documentation/index#admin-user-authentication-module">authentication and rights/profile management module</a>.</p> <p>Access to data can be limited for each user: choice of accessible data, authorization to add, modify or delete data.</p> <p>Each user's access can very simply be limited to their own records.</p> <hr class="my-5"> <p>The dashboard admin is using <span class="fw-bold">Bootstrap 5</span>, <span class="fw-bold">jQuery</span> and <span class="fw-bold">Symphony's TWIG template engine</span>.</p> <p>Forms are built with <a href="https://www.phpformbuilder.pro">PHP Form Builder</a> (which is included in the package), a powerful form generator. This makes it easy to customize your forms if you need some specific functionalities. All security, real-time validation and server-side are integrated.</p> <p>Source code examples of the admin dashboard lists and forms are available <a href="https://www.phpcrudgenerator.com/documentation/index#bootstrap-4-dashboard-code-samples">here in the CRUD documentation</a>.</p> <p>The generator offers many features and options, not all of which are shown in this demo:</p> <ul> <li>Customization of the dashboard admin using the Bootstrap themes available</li> <li>Customization of the home page, lists and forms, adding of scripts</li> <li>Creating new entries in the navigation menu</li> <li>Organization of the navigation menu, management of categories for each entry</li> </ul> <p>The Sakila Database illustrates how PHPCG is able to recognize different relationships between tables. <a href="https://www.phpcrudgenerator.com/tutorials/how-to-manage-database-relations">This tutorial</a> explains the basics of relational databases logic: direct and indirect relations, one-to-many and many-to-many relations.</p> <p>As your project evolves, when you create new tables, new fields, or modify in one way or another the existing structure, you just have to update your modifications from the CRUD Generator, then restart the generation of your pages to report your changes in your admin dashboard. Your project is perfectly scalable, the generator keeps all your data and preferences.</p> <p>For any question, information, do not hesitate to <a href="https://www.miglisoft.com/#contact" title="contact us">contact us</a> by chat on this website or email. ..</p>
    </div>
        </div> <!-- end content-wrapper -->
    </div> <!-- end container -->
    <div id="loader">
        <div class="spinner"></div>
    </div>

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


<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.1/apexcharts.min.js"></script>
<!-- <script src="../class/phpformbuilder/plugins/ajax-data-loader/ajax-data-loader.min.js"></script> -->
<script>
    // create a link in js to apexcharts.min.css cdn and add it to the head
    var link = document.createElement('link');
    link.rel ='stylesheet';
    link.type = 'text/css';
    link.href = 'https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.1/apexcharts.min.css';
    document.getElementsByTagName('head')[0].appendChild(link);

    document.addEventListener('DOMContentLoaded', function (event) {
        fetch('charts/payments.php')
        .then(function (response) {
            return response.text()
        })
        .then(function (html) {
            loadData(html, '#charts', true);
        }).catch((error) => {
            console.log(error);
        });

        setTimeout(() => {
            fetch('charts/films-categories.php')
            .then(function (response) {
                return response.text()
            })
            .then(function (html) {
                loadData(html, '#charts', true);
            }).catch((error) => {
                console.log(error);
            });
        }, 200);

        setTimeout(() => {
            fetch('charts/films-languages.php')
                .then(function (response) {
                    return response.text()
                })
                .then(function (html) {
                    loadData(html, '#charts', true);
                }).catch((error) => {
                    console.log(error);
                });
        }, 400);
    });
</script>
</body>
</body>
</html>