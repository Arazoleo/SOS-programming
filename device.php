<?php
    session_start();
    $_POST;

    $arq = fopen("../../Omega_help/data.txt", "a");

    $us =  str_replace('#', '-', $_POST['user']);
    $type = str_replace('#', '-', $_POST['kind']);
    $des = str_replace('#', '-', $_POST['description']);
    $fil = str_replace('#', '-', $_POST['fileUpload']);
    
    $text = $_SESSION['id'] . "#" . $us . '#' . $type . '#' .  $des . '#' . $fil . PHP_EOL;


    fwrite($arq, $text);

    fclose($arq);

    header("Location: open_call.php");


?>