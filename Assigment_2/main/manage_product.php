<?php
    $query = " select * from product, category where product.Category_ID = category.Category_ID AND category.Category_ID ='$_GET[id]' ";
    $result = $con->query($query);
?>

<H1> New Product </h1>
<ul class="product_list">

<?php
    while($row = mysqli_fetch_array($result)){
?>
<li> 
    <a href="index.php?manage=product_details&id=<?php echo $row['ID_Game'] ?>">
        <img src="admin/modules/product_manage/uploads/<?php echo $row['Image'] ?>">
        <p class="title_product"> <?php echo $row['Title'] ?> : <?php echo $row['Price'] ?>$ </p>                            
    </a>
</li>
<?php
    }
 ?>
</ul>