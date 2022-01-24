<?php
  include 'config.php';
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="../css/style.css">

        <!-- 3D Model Viewer -->
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
          .cont {
            display: flex;
          }

          model-viewer {
            width: 800px; 
            height: 800px;
            flex:55%;
          }

          #home-p1 {
            flex: 40%;
            text-align: center;
            padding: 300px 0px 10px;
            font-size: 22px;
            color: rgb(38, 42, 54);
            opacity: 80%;
            font-weight: 400;
          }

          #home-p {
          text-align: center;
          padding: 0% 25% 0%;
          font-size: 25px;
          color: rgb(38, 42, 54);
          opacity: 80%;
          font-weight: 300;
          margin-bottom: 40px;
        }
        
        footer {
          background-color: aliceblue;
          padding: 20px;
        }

        .fa {
          padding: 20px;
          font-size: 30px;
          width: 50px;
          height: 50px;
          text-align: center;
          text-decoration: none;
        }

        .fa-facebook {
          background: #3B5998;
          color: white;
        }

        .fa:hover {
            opacity: 0.7;
        }
        </style>
    </head>

      <!-- Navigation Bar -->
      <header>
        <div class="navbar">
          <img id="logo1" src="../assets/findr-logo.png">
          <ul>
            <li><a class="active" href="home-page.php">Home</a></li>
            <li><a href="map-page.php">Map</a></li>
            <li><a href="list-page.php">List</a></li>
            <li><a href="program-page.php">Programs</a></li>
          </ul>
          <div class="container-1">
            <p id="text-welcome">WELCOME</p>
            <p id="text-name">
                          <?php 
                              $myusername = $_SESSION['login_user'];
                              $sql = "SELECT AdminID, firstname, lastname FROM admins where usernames = '$myusername'";
                              $result = mysqli_query($conn, $sql);
                              $resultCheck = mysqli_num_rows($result);

                              if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                  echo $row["firstname"] . " " . $row["lastname"];
                                  $_SESSION['myAdmin'] = $row["AdminID"];
                                }
                              }
                          ?>
            </p>
          </div>
          <img id="userprof" src="../assets/people.png">
          
        </div>
      </header>

      <body>
        <div>
                
            <h1 id="headings">Provides useful information about everyone in each barangay.</h1>
            
            <div class="cont">
              <model-viewer src="3D/testhouse.glb" camera-controls>
              </model-viewer>

              <p id="home-p1" > Rather than having separate hardcopies, which is inconvenient, we want 
                  to develop a system that contains all necessary information from barangay residents on a single website.
              </p>
            </div>
            

              <p id="home-p">
                For LGUs, delivery riders, and government officials who need 
                quick access to pertinent and critical information regarding the barangay residents.
              </p>
        </div>
      </body>
      <footer>
        <a href="https://www.facebook.com/Findr-108928284954048" class="fa fa-facebook"></a>
      </footer>

      <?php 
      $myadminID = $_SESSION['myAdmin'];

      $qry = "SELECT NOW();";
      $rs1 = mysqli_query($conn,$qry);
      $rslt1 = mysqli_fetch_array($rs1);
      $time = $rslt1[0];

      $sql = "INSERT INTO profilehistory(ProfHistoryID, DateLog, AdminID)
               VALUES ('', '$time', '$myadminID'); ";
               $result = mysqli_query($conn,$sql);
      ?>
</html>