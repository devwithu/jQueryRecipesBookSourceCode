<?php   
$emid = $_POST['emailadd']; 
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $emid)) 
{
	echo "Invalid email address";
}
?>  