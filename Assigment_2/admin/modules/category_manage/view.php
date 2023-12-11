<?php
    require_once("./connect/connect.php");
    $query = " select * from category ";
    $result = $con->query($query);
?>

<table border="1px" style="width: 100%;">
    <tr> 
        <td>ID_Game</td>
        <td>Category_Name</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>

    <?php
        while($row = mysqli_fetch_assoc($result)){	
            $Category_ID = $row['Category_ID'];       
            $Category = $row['Category_Name'];

    ?>

    <tr>
        <td><?php echo $Category_ID ?></td>
        <td><?php echo $Category ?> </td>
        <td><a href="index.php?id=category&query=update&ID=<?php echo $Category_ID ?>"> Update</a></td>
        <td><a href="./modules/category_manage/delete.php?ID=<?php echo $Category_ID ?>"> Delete</a></td>
    </tr>

    <?php
		}
	?>
</table>	
