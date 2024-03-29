<?php 
include_once 'Dataaccess.php';
class Traiteme{
 public static function ajouterr($villed,$villea,$heured,$heurea,$dated,$datea,$prix){
    $req="insert into voyage(villedepart, villearrive, heuredepart, heurearrive, dated, datea, prix) values ('$villed','$villea','$heured','$heurea','$dated','$datea','$prix')";
    $cur=Dataaccess::miseajour($req);
    return $cur;
 }
 public static function totalprix(){
   $req="SELECT SUM(prix) from voyage";
   $cur=Dataaccess::selection($req);
  
 }
}