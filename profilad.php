<?php
 Session_start();
if (isset($_SESSION['nom'])){
 // header('location:profile.php');
}
include 'fonction1.php';
$user = true;
if (!empty($_POST)) {
    $user = connectAdmin($_POST);
    if ($user) {
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['mp'] = $user['mp'];
        header('Location: indes.php');
        exit();
    } else {
        // Faites quelque chose si la connexion échoue, par exemple, afficher un message d'erreur.
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boost/bootstrap.css">
    <link rel="stylesheet" href="boost/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.10/sweetalert2.min.css">
    <title>Document</title>
</head>
<body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" style="height: 55px;"  >
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Appli Saint Jean</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <div class='navbar-nav'>
        <div class='nav-item text-nowrap ml-5'>
            <a class='nav-link btn btn-dark' href='decon.php'></a>
        </div>
    </div>
</header>
      
    </div>
  </div>
</nav>
<form class="form" style="margin: 50px; " action=""  method="post">
    <h1 class="text-center">Connexion</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
      <label for="floatingInput">Address Email</label>
    </div>
    <div class="form-floating mt-3">
      <input type="password" class="form-control"  name="mp" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Mots de passe</label>
    </div>

    <div class="checkbox mb-3 mt-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Connexion</button>
  </form>

</div>
<div class="bg-dark text-center p-5 mt-4">
  <p class="text-white">
    Tous les droits sont reserveees 2023
  </p>

</div>

<script src="boost/bootstrap.bundle.min.js"></script>
<script src="boost/jquery-3.6.4.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.10/sweetalert2.all.min.js"></script>




</body>
</html>