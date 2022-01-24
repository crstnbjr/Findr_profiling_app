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
        <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

        <style>
          .scroll {
          border: none;
          padding: 5px;
          height: 500px;
          overflow: scroll;
          }
          ::-webkit-scrollbar {
          width: 12px;
          height: 100%;
          }
          ::-webkit-scrollbar-track {
          border: 1px solid #FF005C;
          border-radius: 10px;
          }
          ::-webkit-scrollbar-thumb {
          background: #FF005C;
          border-radius: 10px;
          }
          ::-webkit-scrollbar-thumb:hover {
          background: #ff4f90;
          }
          </style>

    </head>

      <!-- Navigation Bar -->
      <!-- Navigation Bar -->
      <header>
        <div class="navbar">
          <img id="logo1" src="../assets/findr-logo.png">
          <ul>
            <li><a  href="home-page.php">Home</a></li>
            <li><a href="map-page.php">Map</a></li>
            <li><a class="active" href="list-page.php">List</a></li>
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

      <body class="body-list">
        <div class="cont-list">
            <div class="cont-list-mini" style="padding-top: 20px;">
                <div class="scroll">
                  <table>
                    <tr>
                      <th>House <br>Number</th>
                      <th>Household <br>Number</th>
                      <th>Name</th>
                      <th>Birthdate</th>
                      <th>Age</th>
                      <th>Address</th>
                      <th>Contact <br>Number</th>
                      <th>Government <br>Program</th>
                    </tr>
                                <?php
                                    $sql = "SELECT  HouseNumber, HouseholdNumber, Firstname, Lastname, 
                                    Middlename, Suffix, Birthdate, Age, Address, ContactNumber, programName  
                                    FROM residents
                                    INNER JOIN programs ON residents.ProgramID = programs.ProgramID
                                    ORDER BY HouseholdNumber
                                    ";


                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                          <td><?php echo $row["HouseNumber"]; ?></td>
                                          <td><?php echo $row["HouseholdNumber"]; ?></td>
                                          <td><?php echo $row["Lastname"] . ", " . $row["Firstname"] . " " . $row["Middlename"] . " " . $row["Suffix"]; ?></td>
                                          <td><?php echo $row["Birthdate"]; ?></td>
                                          <td><?php echo $row["Age"]; ?></td>
                                          <td><?php echo $row["Address"]; ?></td>
                                          <td><?php echo $row["ContactNumber"]; ?></td>
                                          <td><?php echo $row["programName"]; ?></td>
                                        </tr>
                                        <?php
                                      }
                                    }
                                ?>
                  </table>
                  
                </div>
                
            </div>
            
            <a href="list-add-profile.php"><button id="list-submit" style="margin-left: 550px; margin-top: 30px;">ADD PROFILE</button></a>
        </div>
        <h1 style="margin-left: 40px;">Overall Population: <?php 
                              $sql = "SELECT COUNT(*) as x FROM residents";
                              $result1 = mysqli_query($conn, $sql);
                              $resultCheck = mysqli_num_rows($result);
                              
                              $res = mysqli_fetch_array($result1);
                                
                              $sql1 = "SELECT COUNT(*) as y FROM housemembers";
                              $result2 = mysqli_query($conn, $sql1);
                              $resultCheck = mysqli_num_rows($result);
                                
                              $res2 = mysqli_fetch_array($result2);
                              
                              $total = $res[0] + $res2[0];
                              echo $total;
                          ?></h1>
      </body>
</html>