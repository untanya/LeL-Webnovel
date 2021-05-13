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

        $query = $bdd->prepare('SELECT email, roles_lvl FROM users WHERE email = ?');
        $query->execute(array($email));
        $user = $query->fetchAll();
        $roles_lvl = '1';
        
        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if(password_verify($password, $data['password']))
                {
                    $_SESSION['user'] = $data['pseudo'];

                    foreach($user as $value)
                    {
                        
                        if($user['roles_lvl'] == $roles_lvl)
                        {
                            
                            $_SESSION['roles_lvl'] = $user['roles_lvl'];
                            
                            header('Location: ../Admin/AdminInterface.php');
                            die();
                        }else{header('Location: ../index.php'); die();}
                    }
                }else{ header('Location: form.php?login_err=password'); die(); }
            }else{ header('Location: form.php?login_err=email'); die(); }
        }else{ header('Location: form.php?login_err=already'); die(); }
    }


?>