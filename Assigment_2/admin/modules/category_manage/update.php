<?php
	require_once("./connect/connect.php");
    $Category_ID = $_GET['ID'];
    $query = "select * from category where Category_ID = '".$Category_ID."'";
    $result = mysqli_query($con,$query);
        
    while($row = mysqli_fetch_assoc($result)){
        $Category_Name = $row['Category_Name'];
    }
?>    
        
<div style="margin-left:50px; margin-bottom: 40px;">
    <table border="1px" style="width: 50%;">
        <form action="" method="post" enctype="multipart/form-data">
            <tr>
                <td>Category_ID</td>
                <td><input type="text" class="form-control mb-2" placeholder=" ID " value="<?php echo $Category_ID ?>"></td>
            </tr>

            <tr>
                <td>Category_Name</td>
                <td><input type="text" class="form-control mb-2" placeholder=" Category " name="category"value="<?php echo $Category_Name ?> "></td>
            </tr>
        
            <tr>
                <td colspan="2"><button class="btn btn-primary" name="submit">Submit</button></td>
            </tr>
        </form>
    </table>
</div>


<?php
    		
	if(isset($_POST['submit'])){
		$Category_Name = $_POST['category'];
		$query =  "update category set Category_Name ='$Category_Name' where Category_ID='$Category_ID' ";
   		$result = $con->query($query);
        header ('location:index.php?id=category&query=adds');
				
	}
?>