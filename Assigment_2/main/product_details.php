<?php
    $query = " select * from product,category where product.Category_ID = category.Category_ID AND ID_Game ='$_GET[id]' ";
    $result = $con->query($query);
    while($row = mysqli_fetch_assoc($result)){
?>

<div class="wrapper_product">
    <div class="img_product">
        <img src="admin/modules/product_manage/uploads/<?php echo $row['Image'] ?>">
    </div>
    
    <form method="post" action="main/add_cart.php?idgame=<?php echo $row['ID_Game'] ?>">
        <div class="product_detail">
            <h3 style="color: red;"> <?php echo $row['Title'] ?> </h3>
            <h4> Category: <?php echo $row['Category_Name'] ?> </h4>
            <h4> Price: <?php echo $row['Price'] ?>$ </h4>
            <p><input class="add_cart" name="add_cart" type="submit" value="Add To Cart"></p>       
        </div>
    </form>
</div>
        
<?php
    }
?>