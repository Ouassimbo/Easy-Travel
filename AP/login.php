<?php 

if (isset($_POST['email'])&& isset( $_POST['password']))
{
 require_once 'Model.php';
 require_once 'validate.php';
  $login=validate( $_POST['email']);
  $pass=validate($_POST['password']);
  $r=Model::connexion($login,$pass);
  
  if($r > 0){
    echo "success";
} else{
  
    echo "failure";
}
}
















?>