<!DOCTYPE html>
<html>

<head>
    <title>Web Rent Game</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

    <body>
		<?php
		include('admin/connect/connect.php');
		?>
        <div class="wrapper">            
            <div class="header">
                <img class="image-1" src="image/Pic_9.png" width="1130" height="220">
            </div>
            
            <div class="menu">	
                <ul class="list_menu">
				    <li><a href="index.php?manage=home&id=1"> Home</a></li>
                    <li><a href="index.php?manage=product&id=2"> Product</a></li>
                    <li><a href="index.php?manage=cart&id=3"> Cart</a></li>
					<li><a href="index.php?manage=login&id=4" > Login</a></li>
					<li><a href="index.php?manage=registration&id=5"></a></li> 
					<li><a href="index.php?manage=mana_pro&id=6"></a></li>
                </ul>	
            </div>

			<div class="main">
				<?php
					include("main/sidebar.php");
				?>
				<div class="main_content">
            		<?php
						if(isset($_GET['manage'])){
							$temp = $_GET['manage'];
						}else{
							$temp = '';
						}	
						if($temp == 'product'){
							include("main/product.php");
						}else if($temp =='mana_pro') {
							include("main/manage_product.php");
						}else if($temp =='cart') {
							include("main/cart.php");
						}elseif($temp == 'product_details'){
							include("main/product_details.php");
						}elseif($temp == 'home'){
							include("main/index.php");
						}elseif($temp == 'login'){
							include("main/login.php");
						}elseif($temp == 'registration'){
							include("main/registration.php");
						}else{
							include("main/index.php");
						}
					?>
                </div>
            </div>

			<div class="footer">
        		<p class="title_footer"> Copy right Juno 2022 &#174 </p>
    		</div>

        </div>
    </body>
</html>

			
			