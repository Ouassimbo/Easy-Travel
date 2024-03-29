<?php 
  include_once 'Traiteme.php';
  
  if (isset($_POST['save'])){




    $villed = $_POST['villedepart'];
    $villea = $_POST["villearrive"];
    $heured = $_POST['heuredepart'];
    $heurea= $_POST['heurearrive'];
    $dated= $_POST['dated'];
    $datea= $_POST['datea'];
    $prix= $_POST['prix'];
   
   $r=Traiteme::ajouterr($villed,$villea,$heured,$heurea,$dated,$datea,$prix);
   

   header("Location:http://localhost/easytravel/dashboard/#");
   exit();
}


  
  
                    
?>