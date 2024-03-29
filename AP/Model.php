<?php 
include_once 'Dataaccess.php';

class Model{
    static function connexion($login,$pass)
    {
       $req="select*from voyageur where email='$login' and password='". md5($pass) ."'";
       $cur=Dataaccess::selection($req);
       $nbr=$cur->rowCount();
       return $nbr;
    }
   
public static function Addvoyageur($username,$email,$password){
    $req="insert into voyageur(username,email,password) values ('$username','$email','". md5($password) ."') ;" ;
    $cur=Dataaccess::miseajour($req);
    return $cur;
   }


}
?>