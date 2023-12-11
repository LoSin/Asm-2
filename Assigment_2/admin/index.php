<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php
        include("connect/connect.php");
	?>
        
    <h1 class="title_admin"> Welcome to Admin </h1>
    <div class="wrapper">

        <ul class="admin_list">
            <li><a href="index.php?id=home"style="text-decoration: none;"><H2 > Home </H2></a></li>
            <li><a href="index.php?id=manageproduct&query=add" style="text-decoration: none;"> <h2> Manage Product</h2></h2></a></li>
            <li><a href="index.php?id=category&query=adds"style="text-decoration: none;"><H2 > Category </H2></a></li>
        </ul>
            

        <div class="clear"></div>
        <div class="main">
        <?php
            if(isset($_GET['id'])&& isset($_GET['query']) ){
                $temp = $_GET['id'];
                $query = $_GET['query'];
            }else{
                $temp = '';
                $query = '';
            }
            if($temp == 'manageproduct' && $query == 'add'){
                include("modules/product_manage/form.php");
                include("modules/product_manage/view.php");
            
            }else if($temp == 'manageproduct' && $query == 'update'){
                include("modules/product_manage/update.php");   
              
            }else if($temp == 'category'&& $query == 'adds'){
                include("modules/category_manage/form.php");
                include("modules/category_manage/view.php");
            
            }else if($temp == 'category' && $query == 'update'){
                include("modules/category_manage/update.php");   
              
            }else if($temp == 'home' ){
                include("modules/category_manage/index.php");   
              
            }else{
             echo'';
            }
            
        ?>
        </div>
    </div>


</body>

</html>