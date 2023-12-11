<?php
    session_start();
    if(isset($_GET['delteteall'])&& $_GET['deleteall']==1)
    
    array_push($_SESSION['cart'],$_POST['idgame']);
    $_SESSION['cart'] = array_unique($_SESSION['cart']); 
    session_destroy();    
    
    header('location:../index.php?manage=giohang');
?>