<?php 
if (isset($_POST['username'])&& isset($_POST['email'])&& isset( $_POST['password']))
{
require_once 'Model.php';
require_once 'validate.php';
$username=validate($_POST["username"]);
$email=validate($_POST["email"]);
$password=validate($_POST["password"]);
$r=Model::Addvoyageur($username, $email, $password);

if($r!=0){
    echo "failure";
}else{
    echo "success";   
}
}

















?>