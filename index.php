
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1465/1465612.png" type="image/x-icon">

    <style>
        .body{
            background: url("https://i.gifer.com/4NB4.gif");
        }
        
       
    </style>
    
    <title>SOS Programming</title>
</head>
<body class = "body">
    <form class="forms" action="log_aut.php" method="post">
        <div class="title">Login<br><span class="sub">Is there anything we can help you?</span></div>
        <input name="email" type="email" placeholder="Email" class="em" id="ema" required>
        <input name="senha" type="password" placeholder="Password" class="pass" id="pas" required>
        
        <?php if(isset($_GET['login']) && $_GET['login'] == 'error'): ?>
            <div class="text-danger">
                <br><br><br><br><br><br><br><br><br><br><br><br>
                &nbsp;&nbsp;&nbsp;Invalid User or Password 
            </div>
        <?php endif; ?>
        
        <?php if(isset($_GET['login']) && $_GET['login'] == 'error2'){?>

            <div class="text-danger">
            <br><br><br><br><br><br><br><br><br><br><br><br>
            &nbsp;&nbsp;&nbsp;Please, log in.
            </div>

        <?php } ?>
        
        
        <button type="submit" class="enter">Login</button>
    </form>
    <script src="script.js"></script>
</body>
</html>
