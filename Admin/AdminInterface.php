<?php 
    session_start(); 
    require_once '../menu-traitement.php';
    if($_SESSION['roles_lvl'] != '1')
        header('Location: ../form/form.php');
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Webreader</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="../css/clean-blog.min.css" rel="stylesheet">

</head>

<body>
  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="AdminInterface.php">Admin Interface</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="data.php">Database</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.php">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Retour</a>
          </li>
          <?php echo $out;?>
        </ul>
      </div>
    </div>
  </nav>
  
</body>

<body>
  
  <!-- Page Header -->
  <!-- <header class="masthead">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 mx-auto">
          <div class="site-heading">
            <h1>Formulaires</h1>
            <span class="subheading">Pour ajouter, supprimer des oeuvres/chapitres</span>
          </div>
        </div>
      </div>
    </div>
  </header> -->

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('https://i.imgur.com/IoHSn9Z.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Webreader</h1>
            <span class="subheading"><a href="addOeuvre-form.php" class="btn btn-outline-primary" aria-pressed="true">Formulaire d'ajout d'oeuvre</a></span>
            <span class="subheading"><a href="addChapter-form.php" class="btn btn-outline-primary" aria-pressed="true">Formulaire d'ajout de chapitre</a></span>
            <span class="subheading"><a href="addPost-form.php" class="btn btn-outline-primary" aria-pressed="true">Formulaire d'ajout de post</a></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Header -->
  <!-- <img id="background" src="../img/IoHSn9Z.png"> -->

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>
  <!-- <script src="login.php"></script> -->


</body>
</html>
  