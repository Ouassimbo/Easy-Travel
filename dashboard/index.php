
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Dashboard EasyTravel</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">&nbsp;&nbsp;	&nbsp;		
        <i class="fas fa-paper-plane"></i> 
        &nbsp;	&nbsp;	&nbsp;	<span class="text">Easy Travel</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
 
            <li>
                <a href="#">
                    <i class='bx bxs-group'></i>
                    <span class="text">users</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">

            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
           
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>

        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <?php
                        include_once 'Traiteme.php';
                         $cur=Traiteme::totalprix();
                         ?>
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
						<h3>1020</h3>
						<p>New Order</p>
					</span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
						<h3> <?php echo" $cur MAD";  ?></h3>
						<p>Total Sales</p>
					</span>
                </li>
            </ul>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>LES trajets</h3>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>numbrevo</th>
                                <th>villed</th>
                                <th>villearrive</th>
                                <th>heured</th>
                                <th>heurea</th>
                                <th>dated</th>
                                <th>datea</th>
                                <th>prix</th>
                                <th>m</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include_once('connect.php');
                        $result = $conn->query("SELECT * FROM voyage");
           while($row = mysqli_fetch_array($result))

           {
              echo  "<tr>";
                               echo  "<td><input type='text' readonly  value=". $row['id']."></td>";
                               echo "<td><input type='text' readonly  value=". $row['villedepart'] ."></td>" ;
                               echo "<td><input type='text' readonly  value=". $row['villearrive'] ."></td>";
                               echo "<td><input type='time' readonly  value=". $row['heuredepart'] ."></td>";
                               echo "<td><input type='time' readonly  value=". $row['heurearrive'] ."></td>";
                               echo "<td><input type='date' readonly  value=". $row['dated'] ."></td>";
                               echo "<td><input type='date' readonly  value=". $row['datea'] ."></td>";
                               echo "<td><input type='number' readonly  value=". $row['prix'] ."></td>";
                               echo "<td><button type='submit' name='mo'>modifier</button>
                                <button type='submit' name='de'>delete</button>
                            </td>";
                            echo "</tr>" ;  }
            
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>ADD Les trajets</h3>
    
                    </div>
                    <form action="opp.php" method="post">
                    <ul class="todo-list">
                    <li class="completed">
                    <p>villed</p>
                            <input type="" name="villedepart" id="villedepart">
                        </li>
                        <li class="completed">
                        <p>villearrive</p>
                            <input type="" name="villearrive" id="villearrive">
                        </li>
                        <li class="completed">
                        <p>heured</p>
                            <input type="time" name="heuredepart" id="heuredepart">
                        </li>
                        <li class="completed" >
                        <p>heurea</p>
                            <input type="time" name="heurearrive" id="heurearrive">
                        </li>
                        <li class="completed">
                        <p>dated</p>
                            <input type="date" name="dated" id="dated">
                        </li>
                        <li class="completed">
                        <p>datea</p>
                            <input type="date" name="datea" id="datea">
                        </li>

                        <li class="completed">
                        <p>prix</p>

                            <input type="number" name="prix" id="prix">
                        </li>
                       
                    </ul>
                    <center><button type="submit" name="save">ajouter</button></center>
                    
                    </form>

                   
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="script.js"></script>
</body>

</html>