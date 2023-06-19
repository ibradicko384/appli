
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style/bootstrap/css/bootstrap.min.css">
</head>
<body>
<header class="row bg-dark header">
    <nav>
      <ul>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </nav>
  </header>

<!-- overlay -->
<div id="sidebar-overlay" class="overlay w-100 vh-100 position-fixed d-none"> </div>
<!-- sidebar -->
<div class="row ">
<div class="col-md-3 col-lg-2 px-5  h-90 mt-1 bg-white shadow-sm sidebar" id="sidebar"> 
  <div class="list-group rounded-0">
    
    <a href="#" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
      <span class="bi bi-border-all"> </span>
      <span class="ml-2">Administrateur</span>
    </a>
    <a href="#" class="list-group-item list-group-item-action border-0 align-items-center">
      <span class="bi bi-box"></span>
      <span class="ml-2">Parents</span>
    </a>

    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#sale-collapse">
      <div>
        <span class="bi bi-cart-dash"></span>
        <span class="ml-2">Eleves</span>
      </div>
      <span class="bi bi-chevron-down small"></span>
    </button>
    </div>

    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
      <div>
        <span class="bi bi-cart-plus"></span>
        <span class="ml-2">Deconnexion</span>
      </div>
    </div>
<div class="col ">
<H1 style="color: rgb(80, 80, 243); ">LYCEE SAINT JEAN</H1>

  <span class="bi bi-chevron-down small"></span>
    </button>
    <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
      </div>
  
 
     
      <!-- <div class="list-group">
        
        <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sellers</a>
        <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Moyennes</a>
      </div> -->
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
    <div class="col"><img style="max-width: 70%;" src="../images/admin.png" alt="" ></div>
    <!-- <div class="col"><img style="max-width: 70%;" src="../images/logo1.jpg" alt="" ></div> -->
  <div class="col offset-"><img style="max-width: 65%;" src="../images/parent.png" alt="" ></div>
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
          <a href="#" class="d-flex align-items-center">
            <span class="bi bi-box h5"></span>
            <h5 class="ml-2">Administrateur</h5>
          </a>
        </article>
      </div>
     
      <div class="col-md-6 col-lg-4 offset-3">
        <article class="p-4 rounded shadow-sm border-left mb-4">
          <a href="#" class="d-flex align-items-center">
            <span class="bi bi-person-check h5"></span>
            <h5 class="ml-2">Parents</h5>
          </a>
        </article>
      </div>
    </section>
  </main>
</div>

<footer class="row bg-dark header">
  <div class="col">
  <p class="text-reset">&copy; 2023 Mon site web. Tous droits réservés.</p>
  </div>
   
  </footer>
</body>
</html>
