<?php 
class Dataaccess {

public static  function connextion()
{
try

   {
   $bdd = new PDO('mysql:host=localhost;dbname=travel', 'root', '');
   
$bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
   return $bdd;
   }
catch (Exception $e)
   {
echo('Erreur : ' . $e->getMessage());
   }
}


public static function miseajour($req)
{
try

   {
   $bdd= Dataaccess::connextion() ;
   $maj=$bdd->exec($req);
   return $maj;
    }
catch (Exception $e)
   {
echo('Erreur : ' . $e->getMessage());
   }  $bdd=null;

}



public static function selection($req)
{
try{
$bdd=self::connextion() ;
$rep=$bdd->query($req);
return $rep ;
 }
catch (Exception $e)
   {
echo('Erreur : ' . $e->getMessage());
   }  $bdd=null;


}






}





























                    
  ?>