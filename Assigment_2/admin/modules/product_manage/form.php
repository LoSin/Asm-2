
<div style="margin-left:50px; margin-bottom: 40px;">
<table border="1px" style="width: 50%;">
    <form action="" method="post" enctype="multipart/form-data">
        <tr>
            <td>Title</td>
            <td><input type="text" class="form-control mb-2" placeholder=" Title " name="title"></td>
        </tr>

        <tr>
            <td>Code_Name</td>
            <td><input type="text" class="form-control mb-2" placeholder=" Code_Name " name="code"></td>
        </tr>

        <tr>
            <td>Image</td>
            <td><input type="file" class="form-control mb-2" placeholder=" Image " name="image"></td>
        </tr>

        <tr>
            <td>Price</td>
            <td><input type="text" class="form-control mb-2" placeholder=" Price " name="price"></td>
        </tr>

        <tr>
            <td>Category</td>
            <td>
                <select name="category">
                    <?php
                        $query_category= "Select * from category";
                        $result_category = $con->query($query_category);
                        while($row_category = mysqli_fetch_array($result_category)){
                    ?>
                    <option value="<?php echo $row_category['Category_ID'] ?>"> <?php echo $row_category['Category_Name'] ?> </option>
                    <?php
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
    		
			if(isset($_POST['submit']))
			{
				$Title = $_POST['title'];	
            	$Code = $_POST['code'];
				$Price = $_POST['price'];
                $Category = $_POST['category'];
                $Image = $_FILES['image']['name'];				
				$query = " INSERT INTO product(Title, Code_Game, Image, Price, Category_ID) VALUE('$Title','$Code','$Image', '$Price', '$Category')";
                move_uploaded_file($_FILES['image']['tmp_name'],'modules/product_manage/uploads/'.$Image);
           		$result = $con->query($query);
			}
?>