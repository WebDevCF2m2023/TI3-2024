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
      <div class="header">
        <h2>Create Account</h2>
      </div>
      <form class="form" id="form">
        <div class="form-control">
          <label>Full Name</label>
          <input type="text" id="fullName" placeholder="Enter your Full Name" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small> Error message </small>
        </div>
        <div class="form-control">
          <label>Age</label>
          <input type="number" id="age" placeholder="Enter your age" />

          <small> Error message </small>
        </div>
        <div class="form-control">
          <label>Email</label>
          <input type="text" id="email" placeholder="Enter you email adress" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small> Error message </small>
        </div>

        <div class="form-control">
          <label>Your Gender</label>
          <select name="gender" id="gender">
            <option value="default" selected>-- select an option --</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          <small> Error message </small>
        </div>

        <div class="form-control">
          <label>Phone Number</label>
          <input
            type="number"
            id="phoneNumber"
            placeholder="Enter your phone number"
          />

          <small> Error message </small>
        </div>

        <div class="form-control">
          <label>Password</label>
          <input
            type="password"
            id="password"
            placeholder="Enter your password"
          />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small> Error message </small>
        </div>

        <div class="form-control">
          <label>Password check</label>
          <input
            type="password"
            id="checkPassword"
            placeholder="check your password"
          />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small> Error message </small>
        </div>
        <button>submit</button>
      </form>
    </div>
    <!-- script / js -->
    <script src="./script.js"></script>
    --------------------------------------------------------------------------------------
<div class="container">
<div class="container">
      <div class="header">
        <h2>Create Account</h2>
      </div>
      <form class="form" id="form">
        <div class="form-control">
          <label>Full Name</label>
          <input type="text" id="fullName" placeholder="Enter your Full Name" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small> Error message </small>
        </div>
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
       
        <div class="form-control">
          <label>Age</label>
          <input type="number" id="age" placeholder="Enter your age" />

          <small> Error message </small>
        </div>
        <div class="form-control">
          <label>Email</label>
          <input type="text" id="email" placeholder="Enter you email adress" />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small> Error message </small>
        </div>

        <div class="form-control">
          <label>Your Gender</label>
          <select name="gender" id="gender">
            <option value="default" selected>-- select an option --</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
          <small> Error message </small>
        </div>

        <div class="form-control">
          <label>Phone Number</label>
          <input
            type="number"
            id="phoneNumber"
            placeholder="Enter your phone number"
          />

          <small> Error message </small>
        </div>

        <div class="form-control">
          <label>Password</label>
          <input
            type="password"
            id="password"
            placeholder="Enter your password"
          />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small> Error message </small>
        </div>

        <div class="form-control">
          <label>Password check</label>
          <input
            type="password"
            id="checkPassword"
            placeholder="check your password"
          />
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small> Error message </small>
        </div>
        <button>submit</button>
      </form>