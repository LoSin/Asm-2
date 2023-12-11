<?php
    require_once("./admin/connect/connect.php");   
    session_start();  
?>

    <table border="1px" style="width: 100%;">
        <tr> 
            <td>ID_Game</td>
            <td>Title</td>
            <td>Category</td>
            <td>Image</td>
            <td>Price</td>
            <td>Delete</td>
        </tr>
        
        <?php
            if(isset($_SESSION['cart'])){
            $Price=0;
            foreach($_SESSION['cart'] as $item)
            {       
            $query = "Select * from product, category where product.Category_ID = category.Category_ID AND ID_Game = '$item'";
            $result = $con->query($query);
            $row = mysqli_fetch_assoc($result);
            $tien = $row['Price'];
            $Price += $tien;
  
        ?>
                    
        <tr>
            <td><?=$item ?></td>
            <td><?=$row['Title']?></td>
            <td><?=$row['Category_Name']?></td>
            <td><img src="./admin/modules/product_manage/uploads/<?php echo $row['Image']?> " width="200px"></td>
            <td><?=$row['Price']?></td>
            <td><a href=""> Delete</a></td>
        </tr>
        
        <?php
            }
        ?>
        <tr>
            <td colspan="8">
                <p style="text-align: center; margin-right:40px ;" ><a>Total : <?php echo $Price ?>$</a></p>
            </td>
        </tr>
        
        <tr>
            <td colspan="8">
                <p style="text-align: center; margin-right:40px ;" ><a href="main/deleteall.php?deleteall=1 ">Delete All</a></p>
            </td>
        </tr>
        <tr>
            <td colspan="8">
                <p style="text-align: center; margin-right:40px ;" ><a href="#">Order</a></p>
            </td>
        </tr>
            
        
        <?php       
            }else{
        ?>
            <tr>
                <td colspan="8"><p style="text-align: center;">Cart is empty</p></td>
            </tr>
        <?php
            }
        ?>
    </table>
