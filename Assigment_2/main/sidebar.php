<?php
        $query = " select * from category";
        $result = $con->query($query);
?>
				<div class="sidebar">
                    <ul class="list_sidebar">
                        <?php while($row = mysqli_fetch_array($result)){ ?>
						<li><a href="index.php?manage=mana_pro&id=<?php echo $row['Category_ID'] ?>"> <?php echo $row['Category_Name']?></a></li>
                        <?php } ?>
                    </ul>

                </div>
