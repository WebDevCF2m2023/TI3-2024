<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css" />
    <link rel="stylesheet" href="vendors/linericon/style.css" />
    <link
      rel="stylesheet"
      href="vendors/owl-carousel/owl.theme.default.min.css"
    />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />

    <title>Homepage</title>
</head>
<body>
    <h1>Homepage</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil</a></li>
            <li><a href="?connect">Connexion</a>
        </ul>
    </nav>
    <div class="content">
        <h2>Nos datas</h2>
        <?php if(isset($message)): ?>
                <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php else: ?>
<table>

<span class="glyphicon glyphicon-trash"></span> Delete
                    </button>
                  </div>
                </div>
                <!-- Table -->
                <table id="mytable" class="table">
                  <thead>
                    <tr>
                      <th><input type="checkbox" id="checkall" /></th>
                <th>id</th>
                <th>nom</th>
                <th>adresse</th>
                <th>codepostal</th>
                <th>latitude</th>
                <th>longitude</th>
                      <th style="width: 25%">Progress</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <?php foreach($ourDatas as $item): ?>
                    <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td><?=$item['id']?></td>
                <td><?=$item['nom']?></td>
                <td><?=$item['adresse']?></td>
                <td><?=$item['codepostal']?></td>
                <td><?=$item['latitude']?></td>
                <td><?=$item['longitude']?></td>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
                      <td>
                        <div class="progress">
                          <div
                            style="width: 60%"
                            aria-valuemax="100"
                            aria-valuemin="0"
                            aria-valuenow="60"
                            role="progressbar"
                            class="red progress-bar">
                            <span>60%</span>
                          </div>
                        </div>
    </div>
</body>
</html>