<?php
  include 'menu-traitement.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Accueil</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>
  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">Accueil</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Sorties</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Projets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.php">Partenaires</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <?php echo $out;?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('https://i.imgur.com/IoHSn9Z.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Webreader</h1>
            <span class="subheading">Des webnovels pour tous</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="post.php">
            <h2 class="post-title">
              Lorem ipsum 
            </h2>
            <h3 class="post-subtitle">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Mouais</a>
            on September 24, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="post.php">
            <h2 class="post-title">
              Lorem ipsum
            </h2>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Mouais</a>
            on September 18, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="post.php">
            <h2 class="post-title">
              Lorem ipsum
            </h2>
            <h3 class="post-subtitle">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Mouais</a>
            on August 24, 2019</p>
        </div>
        <hr>
        <div class="post-preview">
          <a href="post.php">
            <h2 class="post-title">
              Lorem ipsum
            </h2>
            <h3 class="post-subtitle">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Mouais</a>
            on July 8, 2019</p>
        </div>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Anciens articles &rarr;</a>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Footer -->
  <?php echo $footer;?>
          <p class="copyright text-muted">Copyright &copy; Webreader 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>
  <!-- <script src="login.php"></script> -->

</body>

</html>