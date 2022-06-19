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
  <link rel="stylesheet" href="assets/css/Sign up.css">
</head>

<body>
  <div class="login-box">
  <?php
        if(isset($_GET['reg_err']))
        {
            $err = htmlspecialchars($_GET['reg_err']);
            switch($err)
            {
                case 'succes':
                ?>
                    <h4 style="text-align: center; color: green">Succès!</h4>
                <?php
                sleep(3);
                header("Location:login.php");
                break;

                case 'email':
                ?>
                    <h4 style="text-align: center; color: red">Erreur! Email incorrect</h4>
                <?php
                break;
                    
                case 'email_length':
                ?>
                    <h4 style="text-align: center; color: red">Erreur! Email trop long</h4>
                <?php
                break;     
                
                case 'pseudo_length':
                ?>
                    <h4 style="text-align: center; color: red">Erreur! Pseudo trop long</h4>
                <?php
                break;
                    
                case 'already':
                ?>
                    <h4 style="text-align: center; color: red">Erreur! Compte déjà existant</h4>
                <?php
                break;  

                case 'password':
                ?>
                    <h4 style="text-align: center; color: red">Erreur! Vous n'avez pas rentrer le mêlme mot de passe</h4>
                <?php
                break;       
            }   
        }   
    ?>
    <h2>S'inscrire</h2>
    <form action="inscirption_traitement.php" method="post" autocomplete="off">
      <div class="user-box">
        <input type="text" name="pseudo" required="required" autocomplete="off">
        <label>Pseudo</label>
      </div>
      <div class="user-box">
        <input type="email" name="email" required="required" autocomplete="off">
        <label>Email</label>
      </div>
      <div class="user-box">
        <input type="password" name="password" required="required" autocomplete="off">
        <label>Mot de passe</label>
      </div>
      <div class="user-box">
        <input type="password" name="password_retype" required="required" autocomplete="off">
        <label>Répéter le mot de passe</label>
      </div>
      <button type="submit">
      S'inscrire
    </button>
   
    </form>
  </div>

</body>

</html>