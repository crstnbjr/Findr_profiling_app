<?php
  include '../config.php';
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="../../css/style.css">

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
            padding-right: 800px;
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
            margin-left: 50px;
            }

            #programs-submit:hover {
            color: white;
            font-weight: bold;
            background-color: #FF005C;
            opacity: 70%;
            }
          </style>

    </head>

      <!-- Navigation Bar -->
      <header>
        <div class="navbar">
          <img id="logo1" src="../../assets/findr-logo.png">
          <ul>
            <li><a href="../home-page.php">Home</a></li>
            <li><a href="../map-page.php">Map</a></li>
            <li><a href="../list-page.php">List</a></li>
            <li><a class="active" href="../program-page.php">Programs</a></li>
          </ul>
          <div class="container-1">
            <p id="text-welcome">WELCOME</p>
            <p id="text-name">Cristine Obejero</p>
          </div>
          <img id="userprof" src="../../assets/people.png">
          
        </div>
      </header>

      <body class="body-list">
        <div class="cont-list">
            <div class="cont-list-mini" style="padding-top: 20px;">
                <div class="scroll">
                  <h1 style="text-align: center; padding: 5px;">PHILHEALTH</h1>
                <table>
                    <tr>
                      <th>House <br>Number</th>
                      <th>Name</th>
                      <th>Birthdate</th>
                      <th>Age</th>
                      <th>Contact <br>Number</th>
                      <th>Government <br>Program</th>
                    </tr>
                                <?php
                                    $sql = "SELECT HOUSENUMBER, LASTNAME, FIRSTNAME, MIDDLENAME, SUFFIX, BIRTHDATE, AGE, CONTACTNUMBER, programs.ProgramName
                                    FROM residents
                                    INNER JOIN programs ON programs.ProgramID = residents.ProgramID
                                    WHERE residents.ProgramID = '2';";


                                    $result = mysqli_query($conn, $sql);
                                    $resultCheck = mysqli_num_rows($result);

                                    if ($result->num_rows > 0) {
                                      // output data of each row
                                      while($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                          <td><?php echo $row["HOUSENUMBER"]; ?></td>
                                          <td><?php echo $row["LASTNAME"] . ", " . $row["FIRSTNAME"] . " " . $row["MIDDLENAME"] . " " . $row["SUFFIX"]; ?></td>
                                          <td><?php echo $row["BIRTHDATE"]; ?></td>
                                          <td><?php echo $row["AGE"]; ?></td>
                                          <td><?php echo $row["CONTACTNUMBER"]; ?></td>
                                          <td><?php echo $row["ProgramName"]; ?></td>
                                        </tr>
                                        <?php $_SESSION['programNAME'] = $row["ProgramName"];
                                              $_SESSION['programID'] = '2';?>
                                        <?php
                                      }
                                    }
                                ?>
                  </table>
                </div>
                <a href="print.php"><button id="programs-submit" style="margin-left: 600px; margin-top: 30px;">PRINT</button></a>
            </div>
        </div>
      </body>
</html>