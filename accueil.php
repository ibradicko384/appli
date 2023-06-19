
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/bootstrap/css/bootstrap.min.css">


    <style>



.img{
  max-width: 40px;
}



/*
  Avec la section, nous voulons prendre toute la place 
  du « viewport » et mettre un arrière-plan en couleur 
  transparente pour donner l’impression
  d’un « pop-up » par-dessus la page.
*/
section.login-container{
    display: flex;
    position: fixed;
    top:0;
    left: 0;
    bottom: 0;
    right: 0;
  
    background: rgba(243,156,18 ,0.8);
}

/*
  Le div directement sous la section nous permet 
  de créer une boite avec une couleur d’arrière-plan
  et une bordure.
*/
section.login-container > div{
    width: 450px;
  
    margin: auto;
  
    padding: 20px;

    text-align: center;

    background: #eee;
    border: 1px solid #ccc;

    border-radius: 5px;

}

/*
    Nous plaçons les éléments à l’intérieur du formulaire
    en « flexbox » sur une seule colonne.
*/
section.login-container form{
    display: flex;
    flex-direction: column;
}

/*
  Nous voulons que les champs du formulaire prennent 
  toute la largeur.
  Le outline: 0; empêche d’avoir un surlignement de
  l’objet au focus.
  C’est moins bon au point de vue de l’accessibilité, 
  mais plus joli du point vu du design.
*/
form input[type="password"], 
form input[type="text"], 
form button[type="submit"] {
    width: 100%;
  
    margin-bottom: 32px;
    padding: 16px;
  
    color: #333;

    border: 1px solid #ccc;
    border-radius: 5px;

    outline: 0;
}

/*
    Au survol et au focus des champs de saisie de texte,
    nous changeons la couleur d’arrière-plan.
*/
form input[type="text"]:focus,
form input[type="text"]:hover,
form input[type="password"]:focus,
form input[type="password"]:hover {
    background-color: #ccc;
}

/*
    Mises-en forme du bouton pour l’envoi du formulaire.
*/
form button[type="submit"] {
    font-weight: bold;
    color: #eee;
    text-transform: uppercase;

    background-color: #e67e22;
}

/*
    Mises-en forme du bouton pour l’envoi du formulaire au survol et au focus.
*/
form button[type="submit"]:focus,
form button[type="submit"]:hover {
    background-color: #d35400;
}





/****************************************************/







/* Styles de base pour la page Web
   Ne pas touchez */


/*------------------
   Reset
------------------*/

html{
    box-sizing: border-box;
}

*,*:before,*:after{
    box-sizing: inherit;
}

/*------------------
   Base
------------------*/

body{
    background-color: white;
    font-family: Helvetica, sans-serif;
}


/*------------------
   Mise en page
------------------*/

.wrapper{
    width: 800px;
    margin-left: auto;
    margin-right: auto;
}

/* @import url('https://fonts.googleapis.com/css2?family=Barlow&display=swap');

body{
  font-family: 'Barlow', sans-serif;
}

a:hover{
  text-decoration: none;
}

.border-left{
  border-left: 2px solid var(--primary) !important;
}


.sidebar{
  top: 0;
  left : 0;
  z-index : 100;
  overflow-y: auto;
}

.overlay{
  background-color: rgb(0 0 0 / 45%);
  z-index: 99;
}

/* sidebar for small screens */
@media screen and (max-width: 767px){
  
    .sidebar{
      max-width: 18rem;
      transform : translateX(-100%);
      transition : transform 0.4s ease-out;
    }
    
    .sidebar.active{
      transform : translateX(0);
    }
    
  }

  @import url('https://fonts.googleapis.com/css2?family=Barlow&display=swap');

body{
  font-family: 'Barlow', sans-serif;
}

a:hover{
  text-decoration: none;
}

.border-left{
  border-left: 2px solid var(--primary) !important;
}


.sidebar{
  top: 0;
  left : 0;
  z-index : 100;
  overflow-y: auto;
}

.overlay{
  background-color: rgb(0 0 0 / 45%);
  z-index: 99;
}

/* sidebar for small screens */
@media screen and (max-width: 767px){
  
  .sidebar{
    max-width: 18rem;
    transform : translateX(-100%);
    transition : transform 0.4s ease-out;
  }
  
  .sidebar.active{
    transform : translateX(0);
  }
  
}

/* espace header  */

header {
  background-color: #f2f2f2;
  padding: 20px;
}
menu{
  float: right;
}

h1 {
  color: #333;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline;
  margin-right: 10px;
}

nav ul li a {
  text-decoration: none;
  color: white;
}

/* espace footer */
footer{
  background-color: #f2f2f2;
  color: white;
}


</style>

</head>
<body>
<header class="row bg-dark  header">
    <nav>
      <ul class="text-reset menu">
        <li><a href="#">Accueil</a></li>
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
      <!-- <span class="bi bi-border-all"></span> -->
      <span class="ml-2">Administrateur</span>
    </a>
    <a href="#" class="list-group-item list-group-item-action border-0 align-items-center">
      <!-- <span class="bi bi-box"></span> -->
      <span class="ml-2">Parents</span>
    </a>

    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#sale-collapse">
      <div>
        <!-- <span class="bi bi-cart-dash"></span> -->
        <span class="ml-2">Eleves</span>
      </div>
      <span class="bi bi-chevron-down small"></span>
    </button>
    </div>

    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
      <div>
        <!-- <span class="bi bi-cart-plus"></span> -->
        <span class="ml-2">Deconnexion</span>
      </div>
    </div>
<div class="col offset-3 pt-5">
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
  <div class="col offset-2"><img style="max-width: 65%;" src="../images/parent.png" alt="" ></div>
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
          <a href="indexe.php" class="d-flex align-items-center">
            <!-- <span class="bi bi-person-check h5"></span> -->
            <h5 class="ml-2">Parents</h5>
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
