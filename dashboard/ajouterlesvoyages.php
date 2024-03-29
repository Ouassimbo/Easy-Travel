<?php
include_once('connect.php');
$villed = $_POST['villedepart'];
$villea = $_POST["villearrive"];
$heured = $_POST['heuredepart'];
$heurea= $_POST['heurearrive'];
$dated= $_POST['dated'];
$datea= $_POST['datea'];
$prix= $_POST['prix'];

if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
  header('Location: /dashboard/index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 