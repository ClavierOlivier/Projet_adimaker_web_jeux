<?php
session_start();
if(isset($_SESSION['user']))
  {
    header('Location:index.php');
  }
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="./assets/css/Login page.css">
</head>

<body>
  <div class="login-box">
  <?php
        if(isset($_GET['login_err']))
        {
            $err = htmlspecialchars($_GET['login_err']);
            switch($err)
            {
                case 'password':
                ?>
                <h4 style="text-align: center; color: red">Erreur! Mot de passe incorrect</h4>
                <?php
                break;

                case 'pseudo':
                ?>
                <h4 style="text-align: center; color: red">Erreur! Pseudo incorrect</h4>
                <?php
                break;
                    
                case 'already':
                ?>
                <h4 style="text-align: center; color: red">Erreur! Compte non existant</h4>
                <?php
                break;        
            }   
        }
      ?>
    <h2>Connexion</h2>
    <form action="connexion.php" method="post" autocomplete="off">
      <div class="user-box">
        <input type="text" name="pseudo" required="required" autocomplete="off">
        <label>Pseudo</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="required" autocomplete="off">
        <label>Mot de passe</label>
      </div>
      <button type="submit">
        Connexion
    </button>
    </form>
  </div>
  
</body>

</html>