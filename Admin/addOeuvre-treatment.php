<?php
    require_once '../form/config.php';

    if(isset($_FILES['oeuvreImg']) && isset($_POST['oeuvreName']) && isset($_POST['auteur']) && isset($_POST['statutNovel']) && isset($_POST['anneeVO']) && isset($_POST['sourceVoName']) && isset($_POST['linkVO']) && isset($_POST['sourceTrad']) && isset($_POST['statutVO']) && isset($_POST['statutVUS']) && isset($_POST['genre']) && isset($_POST['synopsis']))
    {
        $oeuvreImg = $_FILES['oeuvreImg']['name'];
        $img_loc = $_FILES['oeuvreImg']['tmp_name'];
        $img_type = $_FILES['oeuvreImg']['type'];
        $img_size = $_FILES['oeuvreImg']['size'];

        $allowed_type = array('.jpg','.gif','.bmp','.png');
        $max_filesize = 5242880;
        $ext = substr($oeuvreImg, strpos($oeuvreImg,'.'), strlen($oeuvreImg)-1);
        var_dump($ext);
        $fileType = in_array($ext, $allowed_type);
        $filename = time().$ext;

        $oeuvreName = htmlspecialchars($_POST['oeuvreName']);

        $upload_dir = "../series/$oeuvreName/afficheImg/";

        $auteur = htmlspecialchars($_POST['auteur']);
        $statutNovel = htmlspecialchars($_POST['statutNovel']);
        $anneeVO = htmlspecialchars($_POST['anneeVO']);
        $sourceVoName = htmlspecialchars($_POST['sourceVoName']);
        $linkVO = htmlspecialchars($_POST['linkVO']);
        $sourceTrad = htmlspecialchars($_POST['sourceTrad']);
        $statutVO = htmlspecialchars($_POST['statutVO']);
        $statutVUS = htmlspecialchars($_POST['statutVUS']);
        $genre = htmlspecialchars(implode(";", $_POST['genre']));
        $synopsis = htmlspecialchars($_POST['synopsis']);

        $check = $bdd->prepare('SELECT oeuvreName FROM oeuvre WHERE oeuvreName = ?');
        $check->execute(array($oeuvreName));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        if($row == 0){
            mkdir($upload_dir, 0777, true);
            if($fileType) {
                if($img_size <= $max_filesize) {
                    if(strlen($oeuvreName) <= 100){
                        if(strlen($auteur) <= 100){
                            if(strlen($anneeVO) <= 100){
                                if(strlen($sourceVoName) <= 100){
                                    if(strlen($linkVO) <= 255){
                                        if(strlen($sourceTrad) <= 255){
                                            if(strlen($statutVO) <= 100){
                                                if(strlen($statutVUS) <= 100){
                                                    if(strlen($genre) <= 255){
                                                        if(strlen($synopsis) != null){
                                                                
                                                                if(move_uploaded_file($img_loc,$upload_dir . $filename)){
                                                                    
                                                                    $insert = $bdd->prepare('INSERT INTO oeuvre(affiche, oeuvreName, auteur, statutNovel, anneeVO, sourceVoName, linkVO, sourceTrad, statutVO, statutVUS, genre, synopsis) VALUES(:affiche, :oeuvreName, :auteur, :statutNovel, :anneeVO, :sourceVoName, :linkVO, :sourceTrad, :statutVO, :statutVUS, :genre, :synopsis)');
                                                                    $insert->execute(array(
                                                                        'affiche' => $filename,
                                                                        'oeuvreName' => $oeuvreName,
                                                                        'auteur' => $auteur,
                                                                        'statutNovel' => $statutNovel,
                                                                        'anneeVO' => $anneeVO,
                                                                        'sourceVoName' => $sourceVoName,
                                                                        'linkVO' => $linkVO,
                                                                        'sourceTrad' => $sourceTrad,
                                                                        'statutVO' => $statutVO,
                                                                        'statutVUS' => $statutVUS,
                                                                        'genre' => $genre,
                                                                        'synopsis' => $synopsis
                                                                    ));
                                                                    
                                                                    header('Location: AdminInterface.php?reg_err=uploadSucces');
                                                                }else{ header('Location: addOeuvre-form.php?reg_err=uploadError'); die();}

                                                            // if (time_nanosleep(0, 500000000) === true) {
                                                            //     header('Location: AdminInterface.php?reg_succes=succes');
                                                            //     }
                                                            // die();
                                                        }else{ header('Location: addOeuvre-form.php?reg_err=synopsis'); die();}
                                                    }else{ header('Location: addOeuvre-form.php?reg_err=genre'); die();}
                                                }else{ header('Location: addOeuvre-form.php?reg_err=statutVUS'); die();}
                                            }else{ header('Location: addOeuvre-form.php?reg_err=statutVO'); die();}
                                        }else{ header('Location: addOeuvre-form.php?reg_err=sourceTrad'); die();}
                                    }else{ header('Location: addOeuvre-form.php?reg_err=linkVO'); die();}
                                }else{ header('Location: addOeuvre-form.php?reg_err=sourceVoName'); die();}
                            }else{ header('Location: addOeuvre-form.php?reg_err=anneeVO'); die();}
                        }else{ header('Location: addOeuvre-form.php?reg_err=auteur'); die();}
                    }else{ header('Location: addOeuvre-form.php?reg_err=oeuvreName'); die();}
                }else{ header('Location: addOeuvre-form.php?reg_err=TooLargeFile'); die();}
            }else{ header('Location: addOeuvre-form.php?reg_err=disallowImgType'); die();}
        }else{ header('Location: addOeuvre-form.php?reg_err=already'); die();}
    } 

