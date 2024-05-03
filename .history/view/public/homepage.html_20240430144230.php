<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            class="red progress-bar"
                          >
                            <span>60%</span>
                          </div>
                        </div>
                      </td>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>adresse</th>
                <th>codepostal</th>
                <th>latitude</th>
                <th>longitude</th>
            </tr>
                <?php foreach($ourDatas as $item): ?>
                    <tr>
                <td><?=$item['id']?></td>
                <td><?=$item['nom']?></td>
                <td><?=$item['adresse']?></td>
                <td><?=$item['codepostal']?></td>
                <td><?=$item['latitude']?></td>
                <td><?=$item['longitude']?></td>
            </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

        ------------------------------------------------------------------
        <div class="container">
        <div class="row">
          <div class="col-md-12"><h2>Table with Progress Bar</h2></div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="widget blank no-padding">
              <div class="panel panel-default work-progress-table">
                <!-- Default panel contents -->
                <div class="panel-heading">
                  Employee</i
                  >
                  <div class="dropdown rounded">
                    <button
                      class="btn btn-danger pull-right"
                      data-title="Delete"
                      data-toggle="modal"
                      data-target="#delete"
                    >
                      <span class="glyphicon glyphicon-trash"></span> Delete
                    </button>
                  </div>
                </div>
                <!-- Table -->
                <table id="mytable" class="table">
                  <thead>
                    <tr>
                      <th><input type="checkbox" id="checkall" /></th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th style="width: 25%">Progress</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Mohsin</td>
                      <td>+92-333-5586757</td>
                      <td>isometric.mohsin@gmail.com</td>
                      <td>
                        <div class="progress">
                          <div
                            style="width: 60%"
                            aria-valuemax="100"
                            aria-valuemin="0"
                            aria-valuenow="60"
                            role="progressbar"
                            class="red progress-bar"
                          >
                            <span>60%</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="label label-info"><i class="bi bi-pen"></i><i class="bi bi-trash-fill"></i></span></td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Haseeb</td>
                      <td>+92-333-5586757</td>
                      <td>haseeb@gmail.com</td>
                      <td>
                        <div class="progress">
                          <div
                            style="width: 80%"
                            aria-valuemax="100"
                            aria-valuemin="0"
                            aria-valuenow="80"
                            role="progressbar"
                            class="green progress-bar"
                          >
                            <span>80%</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="label label-primary"><i class="bi bi-pen"></i><i class="bi bi-trash-fill"></i></span></td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Hussain</td>
                      <td>+92-333-5586757</td>
                      <td>hussain@gmail.com</td>
                      <td>
                        <div class="progress">
                          <div
                            style="width: 40%"
                            aria-valuemax="100"
                            aria-valuemin="0"
                            aria-valuenow="40"
                            role="progressbar"
                            class="purple progress-bar"
                          >
                            <span>40%</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="label label-warning"><i class="bi bi-pen"></i><i class="bi bi-trash-fill"></i></span>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Noman</td>
                      <td>+92-333-5586757</td>
                      <td>noman@gmail.com</td>
                      <td>
                        <div class="progress">
                          <div
                            style="width: 90%"
                            aria-valuemax="100"
                            aria-valuemin="0"
                            aria-valuenow="90"
                            role="progressbar"
                            class="purple progress-bar"
                          >
                            <span>90%</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="label label-success"><i class="bi bi-pen"></i><i class="bi bi-trash-fill"></i></span></td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Ubaid</td>
                      <td>+92-333-5586757</td>
                      <td>ubaid@gmail.com</td>
                      <td>
                        <div class="progress">
                          <div
                            style="width: 60%"
                            aria-valuemax="100"
                            aria-valuemin="0"
                            aria-valuenow="60"
                            role="progressbar"
                            class="red progress-bar"
                          >
                            <span>60%</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="label label-warning"><i class="bi bi-pen"></i><i class="bi bi-trash-fill"></i></span>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Adnan</td>
                      <td>+92-333-5586757</td>
                      <td>adnan@gmail.com</td>
                      <td>
                        <div class="progress">
                          <div
                            style="width: 45%"
                            aria-valuemax="100"
                            aria-valuemin="0"
                            aria-valuenow="45"
                            role="progressbar"
                            class="red progress-bar"
                          >
                            <span>45%</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="label label-warning"><i class="bi bi-pen"></i><i class="bi bi-trash-fill"></i></span>
                      </td>
                    </tr>
                    <tr>
                      <td><input type="checkbox" class="checkthis" /></td>
                      <td>Saboor</td>
                      <td>+92-333-5586757</td>
                      <td>saboor@gmail.com</td>
                      <td>
                        <div class="progress">
                            <i class="bi bi-trash-fill"></i>
                          <div
                            style="width: 89%"
                            aria-valuemax="100"
                            aria-valuemin="0"
                            aria-valuenow="89"
                            role="progressbar"
                            class="green progress-bar"
                          ><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
                          
                            <span>89%</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="label label-warning"><i class="bi bi-pen"></i><i class="bi bi-trash-fill"></i></span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
            <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Previous">
                            <span aria-hidden="true">
                                <i class="ti-angle-left"></i>
                            </span>
                        </a>
                    </li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item">
                        <a href="#" class="page-link" aria-label="Next">
                            <span aria-hidden="true">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
      </div>
    </div>








    </div>
</body>
</html>