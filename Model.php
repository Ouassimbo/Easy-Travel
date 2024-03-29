<?php 
include_once 'Dataaccess.php';

class Model{
    static function connexion($login,$pass)
    {
       $req="select*from voyageur where email='$login' and password='$pass' ";
       $cur=Dataaccess::selection($req);
       $nbr=$cur->rowCount();
       return $nbr;
    }
   
public static function Addvoyageur($username,$email,$password,$cpassword){
    $req="insert into voyageur(username,email,password,cpassword) values ('$username','$email','$password','$cpassword') ;" ;
    $r=Dataaccess::miseajour($req);
    return $r;
   }


}
?>