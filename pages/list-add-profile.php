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

          #map-inputs[type=text] {
            color: BLACK;
            width: 500px;
            padding: 12px 20px;
            margin: 8px 0px;
            box-sizing: border-box;
            border: none;
            border-radius: 13px;
            border-style: solid;
            border-color: rgb(194, 194, 194);
            border-width: 3px;
            background-color: white;
            font-size: 15px;
            margin-left: 65px;
            }

            #map-inputss[type=text] {
              color: BLACK;
            width: 500px;
            padding: 12px 20px;
            margin: 8px 0px;
            box-sizing: border-box;
            border: none;
            border-radius: 13px;
            border-style: solid;
            border-color: rgb(194, 194, 194);
            border-width: 3px;
            background-color: white;
            font-size: 15px;
            }

            #list-select {
              color: BLACK;
                width: 500px;
                padding: 12px 20px;
                margin: 8px 0px;
                box-sizing: border-box;
                border: none;
                border-radius: 13px;
                border-style: solid;
                border-color: rgb(194, 194, 194);
                border-width: 3px;
                background-color: white;
                font-size: 15px;
                margin-left: 65px;
            }

            #list-select1 {
              color: BLACK;
                width: 500px;
                padding: 12px 20px;
                margin: 8px 0px;
                box-sizing: border-box;
                border: none;
                border-radius: 13px;
                border-style: solid;
                border-color: rgb(194, 194, 194);
                border-width: 3px;
                background-color: white;
                font-size: 15px;
            }

            .cont-list {
                margin: 42px 0px 0px ;
                background-color: #D0E6EA;
                margin-left: 38px;
                width: 95%;
                border-radius: 10px;
                padding: 10px;
                height: 590px;
            }

            .form1 {
              width: 100px;
              flex: 50%;
            }
            .form2 {
              width: 100px;
              flex: 50%;
              margin-right: 70px;
              height: 400px;
            }

            .cont-list {
            margin: 35px 0px 0px ;
            background-color: #D0E6EA;
            margin-left: 38px;
            width: 95%;
            border-radius: 10px;
            height: 600px;
          }
          </style>

    </head>

      <!-- Navigation Bar -->
      <header>
        <div class="navbar">
          <img id="logo1" src="../assets/findr-logo.png">
          <ul>
            <li><a href="home-page.php">Home</a></li>
            <li><a href="map-page.php">Map</a></li>
            <li><a class="active" href="list-page.php">List</a></li>
            <li><a href="program-page.php">Programs</a></li>
          </ul>
          <div class="container-1">
            <p id="text-welcome">WELCOME</p>
            <p id="text-name">Cristine Obejero</p>
          </div>
          <img id="userprof" src="../assets/people.png">
          
        </div>
      </header>

      <body class="body-list">
        <div class="cont-list">
            <div class="cont-list-mini" style="">
                <h1 style="text-align: center;">PERSONAL INFORMATION</h1>
                
                <form action="add-profile.php" method="POST">
                    <div class="form1">
                        <select name="brgy_name" id="list-select" required>
                            <option disabled selected>-- Select Barangay --</option>
                                <?php
                                    $records = mysqli_query($conn, "SELECT BrgyName From barangays"); 

                                    while($data = mysqli_fetch_array($records))
                                    {
                                        echo "<option value='". $data['BrgyName'] ."'>" .$data['BrgyName'] ."</option>"; 
                                        // $_SESSION['brgy_name'] = $data['BrgyName'];
                                    }	
                                ?>
                        </select>
                        <input id="map-inputs" placeholder="House Number" type="text" name="house_no" required/>
                        <input id="map-inputs" placeholder="Household Number"type="text" name="household_no" required/>
                        <input id="map-inputs" placeholder="First Name" type="text" name="fname" required/>
                        <input id="map-inputs" placeholder="Last Name"type="text" name="lname" required/>
                        <input id="map-inputs" placeholder="Middle Name" type="text" name="mname" required/>
                    </div>
                    
                    <div class="form2">
                        <input id="map-inputss" placeholder="Birth Date" type="text" name="bday" required/>
                        <input id="map-inputss" placeholder="Age"type="text" name="age" required/>
                        <input id="map-inputss" placeholder="Address" type="text" name="address" required/>
                        <input id="map-inputss" placeholder="Contact Number"type="text" name="contact_no" required/>
                        <select name="program_name" id="list-select1" required id="map-inputss">
                            <option disabled selected>-- Select Program --</option>
                                <?php
                                    $records = mysqli_query($conn, "SELECT programID, programName From programs"); 

                                    while($data = mysqli_fetch_array($records))
                                    {
                                        echo "<option value='". $data['programName'] ."'>" .$data['programName'] ."</option>"; 
                                    }	
                                ?>
                        </select>
                        <button id="list-submit" style="margin-left: 380px; margin-top: 30px;" class="submit">ADD</button>
                    </div>
                </form>
            </div>

        </div>
      </body>
</html>