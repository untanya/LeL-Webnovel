<?php 
    require_once '../menu-traitement.php';
    require_once 'dropdown.php';
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

  <title>Création de carte</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="../scss/card.scss" rel="stylesheet">

</head>

<body>

    <article class="card">
        <header class="card__thumb">
            <a href="#">
                <img src="../img/image_card.jpg">
            </a>
        </header>
        <div class="card__date">
            <span class="card__date__day">12</span>
            <span class="card__date__month">Mai</span>
        </div>
        <div class="card__body">
            <div class="card__category">Photo</div>
            <div class="card__title">Lorem test</div>
            <div class="card__subtitle">Lorem, ipsum.</div>
            <p class="card__description">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet voluptatem fuga odit possimus in, soluta quae doloribus quaerat corrupti quidem deserunt cupiditate? Sequi sint sunt culpa id, totam quis dolores!
            </p>
        </div>
        <footer class="card__footer">
            <span class="icon icon--time"></span>Lorem
            <!-- <span class="icon icon--comment"></span>Lorem -->
        </footer>
    </article>

</html>