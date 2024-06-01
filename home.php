<?php
    require_once "valid.php";
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        #cont{
            text-align: center;
            position: relative;
            top: 350px;
            right: 340px;
            
        }

        .logo{
            position: fixed;
            left: 350px;
            top: 150px;
            width:150px;
            height:150px;
            border: 5px none transparent;
            border-radius: 50%;
            transition: all 0.2s;
        }

        .logo:hover{
            border: 5px solid blue;
            width: 180px;
            height: 180px;
            
        }

        .logo2{
            position: fixed;
            left: 950px;
            top: 150px;
            width:150px;
            height:150px;
            border: 5px none transparent;
            border-radius: 50%;
            transition: all 0.2s;
        }
        .logo2:hover{
            border: 5px solid blue;
            width: 180px;
            height: 180px;
        }
        .p2{
            position: fixed;
            left: 960px;
            top: 360px;
            color: white;
        }
        p{
            font-size: 20px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
        }
        .exit{
            position: fixed;
            border: 1px none transparent;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            left: 1400px;
            bottom: 600px;
            transition: all 0.2s;

        }
        .exit:hover{
            border: 3px solid white;
            width: 110px;
            height: 110px;
        }
        .back{
            background: linear-gradient(to bottom, black, blue);
            background-size: 100%;
            background-repeat: no-repeat;
        }
        .p1{
            color: white;
        }
    </style>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1465/1465612.png" type="image/x-icon">
    
    <title>Home</title>
</head>
   <body class = "back">
    <div id = "cont">
        <p class = "p1">Your Devices</p>
        <p class = "p2">Request a Device</p>
        

    </div>
  <a href = "search_call.php"><img class = "logo" src = "https://static.vecteezy.com/system/resources/previews/007/167/661/non_2x/user-blue-icon-isolated-on-white-background-free-vector.jpg" ></a> 
  <a href = "open_call.php"><img class = "logo2" src = "https://www.shutterstock.com/image-vector/headphones-logo-can-be-used-600nw-1612779220.jpg"></a>
  <a href="exit.php"><img class = "exit" src="https://images.seeklogo.com/logo-png/52/1/emergency-exit-logo-png_seeklogo-522624.png"></a>
    <!--<h1>Bem-vi à área pregida!</h1>
    <p>S contúdo seguro está aqui.</p>
    <a href="logout.php" class="btn btn-danger">Logout</a>-->
    <script src = "script.js"></script>
    
</body>
</html>
