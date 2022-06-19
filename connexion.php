<?php
    session_start();
    require_once 'config.php';

    if(isset($_POST['pseudo']) && isset($_POST['password']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);

        $check = $bdd->prepare('SELECT pseudo, email, password FROM users WHERE pseudo = ?');
        $check->execute(array($pseudo));
        $data = $check ->fetch();
        $row = $check -> rowCount();

        if($row == 1)
        {
                $password = hash('sha256', $password);
                if($data['password'] === $password)
                {
                    $_SESSION['user'] = $data['pseudo'];
                    header('Location:index.php');
                }else header('Location:login.php?login_err=password');
        }else header('Location:login.php?login_err=already');
    }else header('Location:login.php');
?>