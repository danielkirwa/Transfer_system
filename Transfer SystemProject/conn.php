<?php
$con = @mysqli_connect("localhost", "root", "", "transfer system database");
if(!$con){
  echo "Connection failed!".@mysqli_error($con);
}
else{
echo"Connection successful!";
}
?>
