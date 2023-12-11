<?php
	require_once("./connect/connect.php");
    $ID_Game = $_GET['ID'];
    $query = "select * from product where ID_Game = '".$ID_Game."'";
    $result = mysqli_query($con,$query);
       
    while($row = mysqli_fetch_array($result)){
        $Title = $row['Title'];
        $Code = $row['Code_Game'];
        $Price = $row['Price'];
        $Image = $row['Image'];
        $Category = $row['Category_ID'];

    }
?>    
        
<div style="margin-left:50px; margin-bottom: 40px;">
    <table border="1px" style="width: 50%;">
        <form action="" method="post" enctype="multipart/form-data">
            <tr>
                <td>ID_Game</td>
                <td><input type="text" class="form-control mb-2" placeholder=" ID " value="<?php echo $ID_Game ?>"></td>
            </tr>

            <tr>
                <td>Title</td>
                <td><input type="text" class="form-control mb-2" placeholder=" Title " name="title" value="<?php echo $Title ?> "></td>
            </tr>



            <tr>
                <td>Code_Name</td>
                <td><input type="text" class="form-control mb-2" placeholder=" Code_Name " name="code" value="<?php echo $Code?> "></td>
            </tr>

            <tr>
                <td>Image</td>
            	<td><input type="file" class="form-control mb-2" placeholder=" Image " name="image"> <img src="modules/product_manage/uploads/<?php echo $Image ?> " width="200px"  > </td>
            </tr>

            <tr>
                <td>Price</td>
                <td><input type="text" class="form-control mb-2" placeholder=" Price " name="price"value="<?php echo $Price ?> "></td>
            </tr>

            <tr>
            <td>Category</td>
                <td>
                    <select name="category">
                        <?php
                            $query_category= " select * from category  ";
                            $result_category = $con->query($query_category);

                            while($row_category = mysqli_fetch_array($result_category)){
                            if($row_category['Category_ID'] == $Category){   
                        ?>
                        <option selected value="<?php echo $row_category['Category_ID'] ?>"> <?php echo $row_category['Category_Name'] ?> </option>                       
                        <?php }else{ ?>
                        <option value="<?php echo $row_category['Category_ID'] ?>"> <?php echo $row_category['Category_Name'] ?> </option>  
                        <?php                            
                        }
                    }
                        ?>
                    </select>
                </td>  
            </tr>
                                
            <tr>
                <td colspan="2"><button class="btn btn-primary" name="submit">Submit</button></td>
            </tr>
        </form>
    </table>
</div>


<?php
    		
	if(isset($_POST['submit'])){
	    $Title = $_POST['title'];	
        $Code = $_POST['code'];
		$Price = $_POST['price'];
        $Category = $_POST['category'];
		$Image = $_FILES['image']['name'];
        if($Image == ''){
		    $query =  " update product set Title = '$Title',Code_Game ='$Code',  Price='$Price',   Category_ID='$Category' where ID_Game='$ID_Game' ";
              
        }else{
            $query =  " update product set Title = '$Title',Code_Game ='$Code',Image='$Image',  Price='$Price',   Category_ID='$Category' where ID_Game='$ID_Game' ";
            move_uploaded_file($_FILES['image']['tmp_name'],'modules/product_manage/uploads/'.$Image);  
        }
        
   		$result = $con->query($query);
        header('location:index.php?id=manageproduct&query=add');
				
	}
?>