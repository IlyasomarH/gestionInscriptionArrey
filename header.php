<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'inscription d'Arrey Technologie </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link href="navbar-top-fixed.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Arrey Technologie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link
          <?php if($_SERVER['SCRIPT_NAME']=='/index.php'){
            echo " active";
          }   ?>
          " aria-current="page" href="index.php">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link
          <?php if($_SERVER['SCRIPT_NAME']=='/contact.php'){
            echo " active";
          }   ?>" href="contact.php">Conatct</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?php if($_SERVER['SCRIPT_NAME']=='/blog.php'){
            echo " active";
          }   ?>" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="login.php">Se connecter</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<?php



?>