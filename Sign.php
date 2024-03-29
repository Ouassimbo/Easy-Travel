<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <script
      src="https://kit.fontawesome.com/b6b9586b26.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="CSS/sign.css" />
    

  </head>
  <body>
  <video autoplay muted loop id="myVideo">
  <source src="images/Be.mp4" type="video/mp4">
</video>
    <div id="sign_in">
      <form action="sign.php" method="POST">
        <span>Sign In</span>
        <div id="field">
          <label><i class="fas fa-user"></i></label>
          <input type="text" placeholder="Username" required name="email" />
        </div>

        <div id="field">
          <label><i class="fas fa-lock"></i></label>
          <input type="password" placeholder="Password" required  name="password"/>
        </div>

        <div id="field">
          <input type="submit" value="Log in" name="connexion" />
        </div>
        <?php
                        include_once 'Model.php';
                          if (!empty($_POST['connexion']))
                          {
                            $login=$_POST['email'];
                            $pass=$_POST['password'];
                            $r=Model::connexion($login,$pass);
                            if ($r==0){
                              echo"<center style = 'color :#f80759 '> Ξ login ou pass incorrect !!</center>";
                            }
                            else{
                              header("Location:Accueil.php");
                            }
                          }
                         
                         ?>
      </form>

      <p>
        Not a member?
        <button ><a href="signup.php">Sign up now</a></button>
        <i class="fas fa-arrow-right"></i>
      </p>
    </div>
    </body>
</html>