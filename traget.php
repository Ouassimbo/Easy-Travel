<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        position: absolute;
        z-index: 2;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 70%;
        border-collapse: collapse;
        border-spacing: 0;
        box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
        border-radius: 12px 12px 0 0;
        overflow: hidden;

    }
   

    td,
    th {
        padding: 15px 20px;
        text-align: center;


    }
    td input{
        

    }
    td input[type=text] {
  width: 100%; 
margin: 8px;
font-family: 'Open Sans', Sans-serif;
        background-color: #fafafa;
        text-align: center;
        font-size: 20px;
        
}
 
    th {
        background-color: #61a5c2;
        color: white;
        font-family: 'Open Sans', Sans-serif;
        font-weight: 200;
        text-transform: uppercase;
        

    }
    
.bt {
    margin-top: 1rem;
    display: inline-block;
    padding: 0.5rem 1rem;
    font-size: 1.5rem;
    color: #61a5c2;
    border: 0.2rem solid #61a5c2;
    border-radius: 2rem;
    cursor: pointer;
    background: none;
}

.bt:hover {
    background: #61a5c2;
    color: rgb(255, 255, 255);
    border: 0.2rem solid #ffffff;
}

    tr {
        width: 100%;
        background-color: #fafafa;
        font-family: 'Montserrat', sans-serif;
    }

    tr:nth-child(even) {}

    h2 {
        text-align: center;
        padding: 18px;
        margin-left: 40px;
        margin-right: 40px;
        margin-top: 20px;
        background-color: #eee;
        border-radius: 10px;
        box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
        width: 40%;
        color: #61a5c2;
        font-size: 20px;
        font-family: 'Montserrat', sans-serif;

    }
    </style>
</head>

<body>


    <?php 

include_once 'traitment.php';


    $villed=$_POST['vd'];
    $villea=$_POST['va'];
    $dated=$_POST['dat'];
    $cur=Traitment::findnow($villed,$villea,$dated);
    $n=$cur->rowCount();
   if($n!=0){
    echo "<div style=' margin: 66px; padding:20px; font-size:18px' data-aos='zoom-in' data-aos-delay='300' >";
    echo "<center><table>";
                echo "<tr>";
                echo "<th>code</th>";
                echo "<th>Vdepart</th>";
                echo "<th>Ddepart</th>";
                echo "<th>Hdepart</th>";
                echo "<th>Varrivée</th>";
                echo "<th>Darrivée</th>";
                echo "<th>Harrivée</th>";
                echo "<th>prix</th>";
                echo "<th>reservation </th>";
                echo "</tr>";
                while ($row = $cur->fetch()) {
                    
                    
                    echo "<tr>";
               
                echo "<td><input type='text' readonly id='cv' value='$row[0]'/></td>";
                echo "<td><input type='text' readonly id='cv1' value='$row[1]'/></td>";
                echo "<td><input type='text' readonly id='cv2' value='$row[2]'/></td>";
                echo "<td><input type='text' readonly id='cv3' value='$row[3]'/></td>";
                echo "<td><input type='text' readonly id='cv4' value='$row[4]'/></td>";
                echo "<td><input type='text' readonly id='cv5' value='$row[5]'/></td>";
                echo "<td><input type='text' readonly id='cv6' value='$row[6]'/></td>";
                echo "<td><input type='text' readonly id='cv7' value='$row[7]'/></td>";
                echo "<td>";
                echo"<a href='paiement.php?cv=$row[0]&cv1=$row[1]&cv2=$row[2]&cv3=$row[3]&cv5=$row[5]' class='bt'>reserver</a>";
                echo "</td>";
                echo "</tr>";
                echo "</form>";
                
            }
            $cur->closeCursor();
            echo "</table></center>";
        }else{
                echo "<center><h2 data-aos='zoom-in' data-aos-delay='300'>PAS DE TRAJET !!</h2>
                </center>";
        }
                        





?>
</body>

</html>