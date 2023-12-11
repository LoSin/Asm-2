
<?php
$con = new mysqli("localhost","baohg","123456","assigment2");
// Check connection
if ($con->connect_errno) {
  echo "Failed to connect to MySQL: " . $con->connect_error;
  exit();
}
?>


