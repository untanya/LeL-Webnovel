<?php 
    session_start();
    require_once 'config.php';

    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT pseudo, email, password, roles_lvl FROM users WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if(password_verify($password, $data['password']))
                {
                    $_SESSION['user'] = $data['pseudo'];
                    header('Location: ../Admin/AdminInterface.php');
                    die();
                }else{ header('Location: form.php?login_err=password'); die(); }
            }else{ header('Location: form.php?login_err=email'); die(); }
        }else{ header('Location: form.php?login_err=already'); die(); }
    }
