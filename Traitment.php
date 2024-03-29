<?php 
include_once 'Dataaccess.php';

class Traitment{
    static function findnow($villed,$villea,$dated)
    {
       $req="select * from voyage where villedepart='$villed' and villearrive='$villea' and dated='$dated' ";
       $cur=Dataaccess::selection($req);
       return $cur;
    }
    
public static function checkcreditcard($nom,$num,$anne,$mois,$crypto)
{
   $req="select * from Cartebancaire where num_carte='$num' and "
          . "detenteur ='$nom' and anneeexp='$anne' and moisexp='$mois' and "
          . "crypto ='$crypto'";
 $cur=  Dataaccess::selection($req);
  
  
    $nbr=$cur->rowCount();
    return $nbr;

}
public static function getprix($cv){
    $req="select prix from voyage where id ='$cv'"; 
    $cur=Dataaccess::selection($req);
    $prix=0;
    while ($row = $cur->fetch()) {
                 $prix=$row[0];
             }
             $cur->closeCursor();
    return $prix;

 }
  
 public static function ajouterr($villed,$villea,$heured,$heurea,$dated,$datea,$prix){
    $req="insert into voyage(villedepart, villearrive, heuredepart, heurearrive, dated, datea, prix) values ('$villed','$villea','$heured','$heurea','$dated','$datea','$prix')";
    $cur=Dataaccess::miseajour($req);
    return $cur;
 }

 
} 

    
