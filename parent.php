<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="getbootstrap.com_docs_5.3_assets_js_color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <link rel="stylesheet" href="style\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">

    <title>Exemple de nav</title>

    <link rel="stylesheet" href="getbootstrap.com_docs_5.3_dist_css_bootstrap.min.css">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    
    <link href="navbar-static.css" rel="stylesheet">
    <style>
        body{
            background-color: lightslategray;
        }
    </style>
  </head>
  <body>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>
       
      <div class="container bg-black">
        <div class="row">
        <ul class="nav nav-tabs">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
       </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">L'année scolaire</a>
        <ul class="dropdown-menu">
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">2023</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">L'établissement</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Partenaires</a>
  </li>
  </ul>
  <form class="d-flex" role="search">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Recherche</button> -->
      </form>
        </div>
      </div>
    </div>
  </div>
<main class="container">
<div class="bg-body-tertiary p-5 rounded">
    <div class="row mt-5">
      <div class="col-3 bg-black">
      <img src="images\Users_icon-icons.com_74706.png">
      <p><button type="button" class="btn bg-success mt-2"><a class="malf"  href="consulmoyen.php">Vérification de la moyenne</a></button></p>
      </div>

      <div class="col-3 bg-black offset-1">
      <img src="images\contactlist_theuser_802.png">
      <p><button type="button" class="btn bg-success mt-2"><a class="malf"  href="#">Appréciation</a></button></p>
      </div>

      <div class="col-3 bg-black offset-1">
      <img src="images\groups_people_people_1715.png">
      <p><button type="button" class="btn bg-success mt-2"><a class="malf"  href="#">Avis sur l'app</a></button></p>
      </div>
    </div>
  </div>
</main>
<div class="container">
  <div class="row">
  <div class="bg-black text-center p-5 mt-4">
  <p class="text-white">
    Tous les droits sont reservés 2023
  </p>
</div>

  </div>
  <p><button type="button" class="btn btn-nfo"><a class="abc"  href="accueil.php">Retour à l'accueil</a></button></p>
</div>


 <script src="script\script.js"></script>
    <script src="style\bootstrap\js"></script>
<script src="getbootstrap.com_docs_5.3_dist_js_bootstrap.bundle.min.js"></script>

    </body>
</html>
