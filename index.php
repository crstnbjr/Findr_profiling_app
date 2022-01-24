<?php
  include 'pages/config.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">

        <style>
          .in-1[type=text] {
            color: grey;
            width: 100%;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            border-radius: 13px;
            border-style: solid;
            border-color: rgb(194, 194, 194);
            border-width: 3px;
            background-color: white;
            font-size: 15px;
            padding: 12px 20px;
          } 

          .in-1[type=password] {
            color: grey;
            width: 100%;
            box-sizing: border-box;
            border: none;
            border-radius: 13px;
            border-style: solid;
            border-color: rgb(194, 194, 194);
            border-width: 3px;
            background-color: white;
            font-size: 15px;
            padding: 12px 20px;
          } 

          form {
            display: block;
            margin: auto;
          }

          #index-submit {
            margin-top: 4%;
            padding: 6px 30px;
            font-size: 24px;
            cursor: pointer;
            color: white;
            border-radius: 13px;
            background-color: #FF005C;
            opacity: 80%;
            font-weight: bold;
          }

          #index-submit:hover {
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
        <img id="logo-text" src="assets/findr-logo-text.png">
      </div>
    </header>

    <body>
      <div class="flex-container">
          <div class="index-left">
                <div class="index-small">
                  <h1>Welcome!</h1>
                  <p>Log in an account to continue </p>
                  
                    
                    <form action="pages/login.php" method="POST">
                        <div>
                            <input class="in-1" placeholder="Username" type="text" name="user" required/>
                        </div>
                        <div>
                            <input class="in-1" placeholder="Password" type="password" name="pass" required/>
                        </div>
                        <button id="index-submit" style="margin-left: 150px;">Login</button>
                    </form>
                  </div>
            </div>
          
          
          <div class="index-right">
                <img id="index-pic" src="assets/index-media.png">
          </div>
      </div>
      
    </body>
</html>