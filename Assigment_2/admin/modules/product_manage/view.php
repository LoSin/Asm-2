<?php
    require_once("./connect/connect.php");
    $query = " select * from product,category where product.Category_ID = category.Category_ID ";
    $result = $con->query($query);
?>

<table border="1px" style="width: 100%;">
    <tr> 
        <td>ID_Game</td>
        <td>Title</td>
        <td>Category</td>
        <td>Code_Game</td>
        <td>Image</td>
        <td>Price</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>

    <?php
        while($row = mysqli_fetch_assoc($result)){	
            $ID_Game = $row['ID_Game'];
            $Title = $row['Title'];
            $Category = $row['Category_Name'];
            $Code = $row['Code_Game'];
            $Image = $row['Image'];		
            $Price = $row['Price'];
    ?>

    <tr>
        <td><?php echo $ID_Game ?></td>
        <td><?php echo $Title ?> </td>
        <td><?php echo $Category ?> </td>
		<td><?php echo $Code ?> </td>
        <td><img src="modules/product_manage/uploads/<?php echo $Image ?> " width="200px"  > </td>
        <td><?php echo $Price ?> </td>
        <td><a href="index.php?id=manageproduct&query=update&ID=<?php echo $ID_Game ?>"> Update</a></td>
        <td><a href="./modules/product_manage/delete.php?ID=<?php echo $ID_Game ?>"> Delete</a></td>
    </tr>

    <?php
		}
	?>
</table>	
