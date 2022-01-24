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

          #td-name {
            padding-right: 900px;
            }

            #programs-submit {
            padding: 6px 30px;
            font-size: 24px;
            cursor: pointer;
            color: white;
            border-radius: 13px;
            background-color: #FF005C;
            opacity: 80%;
            font-weight: bold;
            margin: 0px;
            }

            #programs-submit:hover {
            color: white;
            font-weight: bold;
            background-color: #FF005C;
            opacity: 70%;
            }

            #left {
              
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
            <li><a href="list-page.php">List</a></li>
            <li><a class="active" href="program-page.php">Programs</a></li>
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
                    <?php
                      $sql = "SELECT  ProgramName  
                      FROM programs;";

                      $res1 = mysqli_query($conn,$sql);
                      $result1 = mysqli_fetch_array($res1);
                      $prgrmName = $result1['ProgramName'];
                    
                    ?>
                    <tr>
                      <th colspan="4" style="text-align: center; font-size: 24px;">GOVERNMENT PROGRAMS</th>
                      <tr>
                        <td style="padding-right: 1150px;">4PS</td>
                        <td><a href="programs/4PS-page.php"><button id="programs-submit" >VIEW</button></a></td>
                      </tr>
                      <tr>
                        <td>PHILHEALTH</td>
                        <td><a href="programs/PHILHEALTH-page.php"><button id="programs-submit">VIEW</button></a></td>
                      </tr>
                      <tr>
                        <td>SOLO PARENT</td>
                        <td><a href="programs/SOLO_PARENT-page.php"><button id="programs-submit">VIEW</button></a></td>
                      </tr>
                      <tr>
                        <td>UCT</td>
                        <td><a href="programs/UCT-page.php"><button id="programs-submit">VIEW</button></a></td>
                      </tr>
                      <tr>
                        <td>SENIOR CITIZEN</td>
                        <td><a href="programs/SENIOR_CITIZEN-page.php"><button id="programs-submit">VIEW</button></a></td>
                      </tr>
                      <tr>
                        <td>PWD</td>
                        <td><a href="programs/PWD-page.php"><button id="programs-submit">VIEW</button></a></td>
                      </tr>
                    </tr>
                  </table>
                </div>
            </div>
            
        </div>
      </body>
</html>