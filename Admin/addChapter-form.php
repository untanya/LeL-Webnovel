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
  <link href="../css/clean-blog.min.css" rel="stylesheet">

</head>

<body>
    <div class="oeuvre-form">
        

        
        <form id="addChapter-form" action="addChapter-treatment.php" method="post" enctype="multipart/form-data">
                <h2 class="text-center">Ajout d'oeuvre</h2>       
                
                <div class="form-group col-md-6">
                    <input class="file btn btn-outline-primary" name="oeuvreImg" type="file" id="oeuvreImg" style="color: #ccc;">
                </div>
                
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="oeuvreName" placeholder="Nom de l'oeuvre" style="color: #ccc;">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="auteur" placeholder="Nom de l'auteur" style="color: #ccc;">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="anneeVO" placeholder="Année de sortie de la VO" style="color: #ccc;">
                </div>
                <div name="VO">
                    <h1 class="text-justify">La VO</h1>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="sourceVoName" placeholder="Le nom de la source VO" style="color: #ccc;">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="linkVO" placeholder="Le lien de la source VO" style="color: #ccc;">
                    </div>
                    
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" name="sourceTrad" placeholder="Traduit d'où ?" style="color: #ccc;">
                </div>
                <div name="statut">
                    <div class="form-group col-md-6">
                        <!-- <input type="text" class="form-control" name="StatutVO" placeholder="Statut de la VO :"> -->
                        <h3><label for="statutVO">Statut de la VO</label></h3>
                        <select name="statutVO" class="form-control" id="statutVO">
                        <option selected="selected">Choisis</option>
                            <?php
                                // A sample product array
                                // $products = array("Mobile", "Laptop", "Tablet", "Camera");
                                
                                // Iterating through the product array
                                foreach($statutV as $item){
                                    echo "<option value='$item'>$item</option>";
                                }
                            ?>
                        </select>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <!-- <input type="text" class="form-control" name="StatutVUS" placeholder="Statut de la VUS :"> -->
                        <h3><label for="statutVUS">Statut de la VUS</label></h3>
                        <select name="statutVUS" class="form-control" id="statutVUS">
                            <option selected="selected">Choisis</option>
                            <?php
                                // A sample product array
                                // $products = array("Mobile", "Laptop", "Tablet", "Camera");
                                
                                // Iterating through the product array
                                foreach($statutV as $item){
                                    echo "<option value='$item'>$item</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                
                
                <!-- <div class="form-group col-md-6">
                    <h2><label for="genre">Les genres :</label></h2>
                    <select class="form-control" name="genre" id="genre" aria-placeholder="Sélectionner les genres qui correspondent !" multiple>
                        <option disabled></option> -->
                
                            <?php
                                
                                foreach($genreDropdown as $item){
                                    // echo "<option value='strtolower($item)'>$item</option>";
                                    echo "<div class='g-cols wpb_row offset_default form-group form-check-inline'>
                                        <fieldset>
                                            <input class='form-check-input' type='checkbox' name='genre[]' id='genre' value='". $item ."'>
                                            <label class='form-check-label' for='genre'>". $item ."</label>
                                        </fieldset>
                                        </div>
                                    ";
                                }
                                ?>
                    <!-- </select> -->
                <!-- </div> -->

                <div class="form-group col-auto">
                    <h2><label for="Synopsis">Synopsis de l'oeuvre</label></h2>
                    <textarea class="form-control" name="synopsis" placeholder="Mettez le synopsis de l'oeuvre ici" id="synopsis" style="height: 100px; background-color: #1c1c1c; color: #ccc;"></textarea>
                </div>
                        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="ajoutOeuvre">Ajouter l'oeuvre</button>
                </div>
        </form>
    </div>

</body>
<style>
    .oeuvre-form {
        top: 0;
        left: 0;
        width: 100%;
        margin: auto;
    }
    .oeuvre-form form {
        /* margin-bottom: 15px; */
        background-image: url('../img/IoHSn9Z.png');
        color: #ccc;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .oeuvre-form h2 {
        margin: 0 0 15px;
    }
    .oeuvre-form input.form-control{
        background-color: #1c1c1c;
    }
    .oeuvre-form select.form-control{
        background-color: #1c1c1c;
    }
</style>
</body>

</html>