<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sign up</title>
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
  <div id="sign_up">
      <form action="signup.php" method="POST"  oninput='cpassword.setCustomValidity(password.value != cpassword.value ? "Passwords do not match." : "")'>
        <span>Sign Up</span>
        <div id="field">
          <label><i class="fas fa-user"></i></label>
          <input type="text" placeholder="Username" required  name="username"/>
        </div>

        <div id="field">
          <label><i class="fas fa-envelope-open"></i></label>
          <input type="email" placeholder="Email Address" required name="email"/>
        </div>

        <div id="field">
          <label><i class="fas fa-lock"></i></label>
          <input type="password" placeholder="Password" required name="password"/>
        </div>

        <div id="field">
          <label><i class="fas fa-lock"></i></label>
          <input type="password" placeholder="Confirm Password" required  name="cpassword"/>
        </div>

        <div id="field">
          <input type="submit" value="Register" name="save" />
        </div>
      </form>

      <p>
      <?php 
  include_once 'Model.php';
  
  if (!empty($_POST['save'])){





    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $r=Model::Addvoyageur($username, $email, $password, $cpassword);
   if($r!=0){
    header("Location:Accueil.php");
   }
   else{
    header("Location:about.php");
   }




  
  }
                    
?>
        Already a member?
        <button ><a href="sign.php">Sign in now</a></button>
        <i class="fas fa-arrow-right"></i>
      </p>
    </div>
  

  </body>
</html>
