<?php
	$ID_Game = $_GET['ID'];
    require_once("../../connect/connect.php");
    $query = " delete from product where ID_Game = '$ID_Game' ";
    $result = $con->query($query);
	header ('location:../../index.php?id=manageproduct&query=add');
?>