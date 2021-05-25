<?php
  require_once 'form/connexion.php';
  // var_dump($_SERVER['PHP_SELF']);
  
  if(isset($_SESSION['user'])) // Regarde si la session user est présente
  {
    $username = $_SESSION['user'];
    
    $query = $bdd->prepare('SELECT pseudo, roles_lvl FROM `users` WHERE pseudo = ?');
    $query->execute(array($username));
    $user = $query->fetchAll();
    $roles_lvl = '1';

    foreach($user as $value)
    {
      if($value['roles_lvl'] == $roles_lvl)
      {
        $_SESSION['roles_lvl'] = $value['roles_lvl'];
        
        $adress_page = substr($_SERVER['PHP_SELF'], 14);

        if($adress_page == 'Admin/AdminInterface.php'|| $adress_page == 'Admin/data.php' || $adress_page == 'Admin/post.php' )
        {
          $out = '<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" aria-haspopup="true" href="" data-toggle="dropdown">' . $username . '</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../form/deconnexion.php">Deconnexion</a>
          </div>
        </li>';
        }else {
          $out = '<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" aria-haspopup="true" href="" data-toggle="dropdown">' . $username . '</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="./Admin/AdminInterface.php">Manage</a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="./form/deconnexion.php">Deconnexion</a>
          </div>
        </li>'; // crée un menu déroulant
        }

        
        
      }else {
        
        $out = '<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" aria-haspopup="true" href="" data-toggle="dropdown">' . $username . '</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="./form/deconnexion.php">Deconnexion</a>
                </div>
              </li>'; // crée un menu déroulant
        
      }
    }
  }else{
    $out = '<li class="nav-item"><a class="nav-link" href="./form/form.php">Connexion</a></li>';
  } //S'il n'y a pas de session, donc ça permet l'affichage que de l'item Connexion.


  $footer = '<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <ul class="list-inline text-center">
          <li class="list-inline-item">
            <a href="#">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://discord.gg/mfzYRTV">
              <span class="fa-stack fa-lg">
                <i class="fas fa-circle fa-stack-2x"></i>
                <i class="fab fa-discord fa-stack-1x fa-inverse"></i>
              </span>
            </a>
          </li>
        </ul>'

?>