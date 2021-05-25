<?php 
    require_once '../menu-traitement.php';
    // require_once 'addChapter-treatment.php';
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

  <title>Formulaire de création d'oeuvre</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>

		<div class="wrapper">
		<video autoplay muted loop id="myVideo">
			<source src="../img/Macro_Plex_4K_Motion_Background_Loop.mp4" type="video/mp4">
		</video>
			<div class="inner">
				<?php    
				if(isset($_GET['reg_err']))
				{
					$err = htmlspecialchars($_GET['reg_err']);

					switch($err)
					{
						case 'success':
						?>
							<div class="alert alert-success">
								<strong>Succès</strong> ajout de la nouvelle oeuvre faite !
							</div>
						<?php
						break;
							

						case 'synopsis':
						?>
							<div class="alert alert-danger">
								<strong>Erreur</strong> Il n'y a pas de synopsis !
							</div>
						<?php
						break;

						case 'genre':
						?>
							<div class="alert alert-danger">
								<strong>Erreur</strong> Aucun genre n'a été ajouté !
							</div>
						<?php
						break;

						case 'statutVUS':
						?>
							<div class="alert alert-danger">
								<strong>Erreur</strong> Aucun statut pour la VUS n'a été mise !
							</div>
						<?php 
						break;

						case 'statutVO':
						?>
							<div class="alert alert-danger">
								<strong>Erreur</strong> Aucun statut pour la VO n'a été mise !
							</div>
						<?php 
						break;
						
						case 'sourceTrad':
							?>
								<div class="alert alert-danger">
									<strong>Erreur</strong> la source de traduction n'a pas été mise !
								</div>
							<?php
						break;

						case 'linkVO':
							?>
								<div class="alert alert-danger">
									<strong>Erreur</strong> Aucun lien pour la VO n'a été mis !
								</div>
							<?php
						break;

						case 'sourceVoName':
							?>
								<div class="alert alert-danger">
									<strong>Erreur</strong> Aucune source VO n'a été mise !
								</div>
							<?php
						break;

						case 'anneeVO':
							?>
								<div class="alert alert-danger">
									<strong>Erreur</strong> l'année de sortie de la VO n'a pas été ressourcé !
								</div>
							<?php
						break;

						case 'auteur':
							?>
								<div class="alert alert-danger">
									<strong>Erreur</strong> Aucun auteur n'a été ressourcé !
								</div>
							<?php
						break;

						case 'oeuvreName':
							?>
								<div class="alert alert-danger">
									<strong>Erreur</strong> Aucun nom d'oeuvre n'a été ressourcé !
								</div>
							<?php
						break;

						case 'disallowImgType':
						?>
							<div class="alert alert-danger">
								<strong>Erreur</strong> soit l'extension de l'image n'est pas un JPG, GIF, BMP ou un PNG, donc veuillez mettre une image avec une de ces extensions ! Soit vous n'avez pas mis d'image !
							</div>
						<?php

						case 'TooLargeFile':
							?>
								<div class="alert alert-danger">
									<strong>Erreur</strong> le fichier est trop lourd (Il ne doit pas faire plus de 5MB) !
								</div>
							<?php
						break;

						case 'uploadError':
							?>
								<div class="alert alert-danger">
									<strong>Erreur</strong> l'upload ne s'est pas bien passé !
								</div>
							<?php
						break;

						case 'uploadSuccess':
							?>
								<div class="alert alert-danger">
									<strong>Erreur</strong> l'upload s'est bien passé !
								</div>
							<?php
						break;
						
						case 'already':
							?>
								<div class="alert alert-danger">
									<strong>Erreur</strong> Oeuvre déjà existante !
								</div>
							<?php 
					}
				}

				if(isset($_GET['reg_succes']))
				{
					$err = htmlspecialchars($_GET['reg_succes']);

					switch($err)
					{
						case 'succes':
							?>
								<div class="alert alert-succes">
									<strong>Succès</strong> Vous allez être redirigé vers la page d'accueil Admin !
								</div>
							<?php
							break;
					}
				}
				?>

				<form id="addOeuvre-form" action="addOeuvre-treatment.php" method="post" enctype="multipart/form-data">
					<h3>Ajout d'oeuvre</h3>
					
					<div class="form-wrapper">
						<input class="file btn btn-outline-primary" name="oeuvreImg" type="file" id="oeuvreImg" style="color: #fff;">
					</div>
					<div class="form-group">
						<div class="form-wrapper">
							<input type="text" class="form-control" name="oeuvreName" placeholder="Nom de l'oeuvre">
						</div>
						<div class="form-wrapper">
							<input type="text" class="form-control" name="auteur" placeholder="Nom de l'auteur">
						</div>
					</div>
					
					<div class="form-wrapper">
					<select name="statutNovel" class="form-control" id="statutNovel">
                        <option selected>WN</option>
						<option>LN</option>
                        </select>
					</div>
					<div class="form-wrapper">
						<input type="text" class="form-control" name="anneeVO" placeholder="Année de sortie de la VO">
					</div>
					
					<h3><label for="form-group">La VO</label></h3>
					<div class="form-group">
						
						<div class="form-wrapper">
							<input type="text" class="form-control" name="sourceVoName" placeholder="Le nom de la source VO">
						</div>
						<div class="form-wrapper">
							<input type="text" class="form-control" name="linkVO" placeholder="Le lien de la source VO">
						</div>
					</div>

					<div class="form-wrapper">
						<input type="text" class="form-control" name="sourceTrad" placeholder="Traduit-d'où ?">
					</div>

					<h3><label for="statutVO">Statut de la VO</label></h3>
					<div class="form-wrapper">
						<select name="statutVO" class="form-control" id="statutVO">
                        <option selected="selected">Choisis</option>
                            <?php
                                foreach($statutV as $item){
                                    echo "<option value='$item'>$item</option>";
                                }
                            ?>
                        </select>
					</div>
					
					<h3><label for="statutVUS">Statut de la VUS</label></h3>
					<div class="form-wrapper">
						<select name="statutVUS" class="form-control" id="statutVUS">
						<option selected="selected">Choisis</option>
							<?php
								foreach($statutV as $item){
									echo "<option value='$item'>$item</option>";
								}
							?>
                        </select>
					</div>
					<div class="form-group" style="flex-wrap: wrap; flex-direction: row; width: 100%; justify-content: space-between; overflow: hidden;">
						<?php
									
							foreach($genreDropdown as $item){
								// echo "<option value='strtolower($item)'>$item</option>";
								echo "<div id='genreField' class='form-group-checkbox' style='display: flex; flex-direction: row; width: 25%; max-width: 400px'>
									
										<input class='form-wrapper' type='checkbox' name='genre[]' id='genre-" . $item ."' value='". $item ."'style='width:auto;'>
										<label class='form-check-label' for='genre-" . $item ."'>". $item ."</label>
										
									</div>
								";
							}
						?>
					</div>
					<div class="form-wrapper">
						<h2><label for="Synopsis">Synopsis de l'oeuvre</label></h2>
						<textarea class="form-control" name="synopsis" placeholder="Mettez le synopsis de l'oeuvre ici" id="synopsis" style="height: 100px; background-color: #1c1c1c; color: #ccc;"></textarea>
					</div>
					
					<button type="submit" name="ajoutOeuvre">Ajouter l'oeuvre</button>
				</form>
			</div>
		</div>
		
	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
	
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>