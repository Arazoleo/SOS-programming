<?php
    require_once "valid.php";
?>

<?php
    $calls = array();

    $file = fopen("../../Omega_help/data.txt", "r");

    while(!feof($file)){
       $reg =  fgets($file);
       $calls[] = $reg;
    }

    fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "styles2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <style>
        #card{
            box-shadow: 0px 0px 10px aqua;
            border: 3px none aqua;
        }
        .homeLogo {
            position: fixed;
            left: 40px;
            top: 40px;
            width: 100px;
            height: 100px;
            border: 5px none transparent;
            border-radius: 50%;
            transition: all 0.2s;
        }
        .homeLogo:hover {
            border: 5px solid blue;
            width: 120px;
            height: 120px;
        }
        #down{
            cursor: pointer;
            width: 120px;
            font-weight: bold;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border: 3px none transparent;
            border-radius: 20px;
            background: aqua;
            transition: background 0.2s;
        }
        #down:hover{
            background: blue;
            box-shadow: 0px 0px 10px aqua;
        }
        
    </style>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1465/1465612.png" type="image/x-icon">
    <title>Search</title>
</head>
<body class = "bg-dark text-white p-3">

    <?php foreach($calls as $ind){ ?>

        <?php
            $data = explode('#', $ind);

            if($_SESSION['perfil'] == 2){
                if($_SESSION['id'] != $data[0]){
                    continue;
                }
            }

            if(count($data) < 4){
                continue;
            }


        ?>

            <div class = "container">
                <div class = "card mb-3 bg-dark">
                    <div class = "card-body" id = "card">
                        <h4 class = "card-title"><?php echo $data[1]?></h4>
                        <h5 class = "card-subtitle mb-2 text-muted"><?php echo $data[2]?></h5>
                        <p class = "card-text"><?php echo $data[3]?></p>
                        <?php if (!empty($data[4])): ?>
                            <a href="<?php echo $data[4]; ?>" download>
                            <button id = "down">
                            Download code
                            </button></a>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>   
    <?php }?>



    <a href="home.php">
        <img class="homeLogo" src="https://png.pngtree.com/element_our/png/20181214/real-estate-house-logo-graphic-design-template-vector-illustration-png_269519.jpg">
    </a>



    <script src = "script.js"></script>
</body>
</html>

