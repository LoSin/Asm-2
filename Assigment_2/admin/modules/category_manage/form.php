
<div style="margin-left:50px; margin-bottom: 40px;">
<table border="1px" style="width: 50%;">
    <form action="" method="post" enctype="multipart/form-data">
        
        <tr>
            <td>Category_Name</td>
            <td><input type="text" class="form-control mb-2" placeholder=" Category " name="category"></td>
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
				$Category = $_POST['category'];				
				$query = " INSERT INTO category(Category_Name) VALUE('$Category')";
           		$result = $con->query($query);
			}
?>