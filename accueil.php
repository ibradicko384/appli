
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style1.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <style>
        body{
            background-color: lavenderblush;
        }
      a{
        text-decoration: none;
      }
    </style>
</head>
<body>
<header class="row bg-dark  header">
    <nav>
      <ul class="text-reset menu">
        <li><a href="accueil.php">Accueil</a></li>
        <li><a href="https://www.microsoft.com/fr-fr/store/b/sale?icid=TopNavDealsSale">Paramètres</a></li>
      </ul>
    </nav>
  </header>
<!-- overlay -->
<div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"> </div>
<!-- sidebar -->
<div class="row bg-body-tertiary">
<div class="col-md-3 col-lg-2 px-5  h-90 mt-1 bg-white shadow-sm sidebar" id="sidebar"> 
  <div class="list-group rounded-0">
    <a href="admin.php" class="list-group-item list-group-item-action border-0 d-flex align-items-center">
      Administrateur
    </a>
    <a href="authapapa.php" class="list-group-item list-group-item-action border-0 d-flex align-items-center"> 
      <span class="ml-2">Parents</span>
    </a>
    <a href="authapapa.php" class="list-group-item list-group-item-action border-0 d-flex align-items-center"> 
      <span class="ml-2">Localisation</span>
    </a>
    <a href="authapapa.php" class="list-group-item list-group-item-action border-0 d-flex align-items-center"> 
      <span class="ml-2">Déconnexion</span>
    </a>
    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#sale-collapse">
      <span class="bi bi-chevron-down small"></span>
    </button>
    </div>
    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
      <div>
        <span class="ml-2"></span>
      </div>
    </div>
<div class="col offset-5 pt-5">
<H1 style="color: rgb(80, 80, 243); ">LYCEE SAINT JEAN</H1>
  <span class="bi bi-chevron-down small"></span>
    </button>
    <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
      </div>
    </div>
  </div>
<div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
  <!-- top nav -->
  <nav class="w-100 d-flex px-4 py-2 mb-4 shadow-sm">
    <!-- close sidebar -->
    <button class="btn py-0 d-lg-none" id="open-sidebar">
      <span class="bi bi-list text-primary h3"></span>
    </button>
    <div class="dropdown ml-auto">
      <button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
        <span class="bi bi-person text-primary h4"></span>
        <span class="bi bi-chevron-down ml-1 mb-2 small"></span>
      </button>
      <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
        <a class="dropdown-item" href="#">Logout</a>
        <a class="dropdown-item" href="#">Settings</a>
      </div>
    </div>
  </nav>
  <!-- main content -->
  <main class="p-0 min-vh-60">
    <div class="container-fluid">
  <div class="row">
    <div class="col-4"><img style="max-width: 100%;" src="images/trois (2).png" alt="" ></div>
    <div class="col-4"><img style="max-width: 100%;" src="images/trois (1).png" alt="" ></div>
    <div class="col-4"><img style="max-width: 100%;" src="images/trois (2).png" alt="" ></div>
  </div>
  </div>
    <div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
      <div class="container">
        <h1 class="display-4 mb-2 text-primary"></h1>
        <p class="lead text-muted"></p>
      </div> 
    </div>
    <section class="row">
      <div class="col-md-6 col-lg-4">
        <!-- card -->
        <article class="p-4 rounded shadow-sm border-left mb-4">
          <a href="admin.php" class="d-flex align-items-center">
            <!-- <span class="bi bi-box h5"></span> -->
            <h5 class="ml-2">Administrateur</h5>
          </a>
        </article>
      </div>
      <div class="col-md-6 col-lg-4 offset-3">
        <article class="p-4 rounded shadow-sm border-left mb-4">
          <a href="parent.php" class="d-flex align-items-center">
            <!-- <span class="bi bi-person-check h5"></span> -->
            <h5 class="ml-2">Parents
          </a>
        </article>
      </div>
    </section>
  </main>
</div>
<footer class="row bg-dark">
  <div class="row">
<div class="col"></div>
  <div class="col pt-3 offset-1">  <p class="text-reset footer">&copy; 2023 lycée saint jean. Tous droits réservés.</p></div>
  <div class="col"></div>
  </div>
  </footer>
</body>
</html>
