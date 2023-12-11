<?php
	$Category_ID = $_GET['ID'];
    require_once("../../connect/connect.php");
    $query = " delete from category where Category_ID = '$Category_ID' ";
    $result = $con->query($query);
	header ('location:../../index.php?id=category&query=adds');
?>