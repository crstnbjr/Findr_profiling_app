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
        <title>Map</title>
        <link rel="stylesheet" href="../css/style.css">

        <!-- 3D Model Viewer -->
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

        <style>
          /* NOTIFY PAGE */
          .cont-notify-left {
            flex: 50%;
          }

          .cont-notify-right {
            flex: 50%;
          }

          .cont-notify-right img {
            width: 90%;
            margin-left: 30px;
            margin-top: 20px;
          }

          textarea {
          margin-top: 50px;
          padding: 10px;
          color: grey;
          width: 535px;
          height: 300px;  
          box-sizing: border-box;
          border: none;
          border-radius: 13px;
          border-style: solid;
          border-color: rgb(194, 194, 194);
          border-width: 3px;
          background-color: white;
          font-size: 18px; 
          align-self: center;
          }

          #sms-submit {
          margin-top: 4%;
          padding: 6px 30px;
          font-size: 24px;
          cursor: pointer;
          color: white;
          border-radius: 13px;
          background-color: #FF005C;
          opacity: 80%;
          font-weight: bold;
          margin-left: 140px;
          }

          #sms-submit:hover {
          color: white;
          font-weight: bold;
          background-color: #FF005C;
          opacity: 70%;
          }

          #form-sms {
            display: block;
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
        <div class="flex-container">
            <div class="cont-notify-left">
                <form id="form-sms">
                      <textarea name="text"></textarea>
                      <div>
                        <button id="sms-submit">SEND MESSAGE</button>
                      </div>
                      
                </form>
            </div>
            <div class="cont-notify-right">
                <img src="../assets/msg-people.png">
            </div>
        </div>
      </body>
</html>