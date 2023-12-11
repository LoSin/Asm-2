<?php 
    session_start();
    if(!isset($_SESSION['cart'])){ 
    $_SESSION['cart']=[];
    }
    array_push($_SESSION['cart'],$_GET['idgame']);
    $_SESSION['cart'] = array_unique($_SESSION['cart']);    
    header('location:../index.php?manage=cart');
?>

               