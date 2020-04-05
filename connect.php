


<!DOCTYPE html>
<html>
<?php
session_start();
$db = mysqli_connect("localhost","root","","inventory");
if(!$db)
{
	die("Could not connect".mysqli_connect_error());
}
?>
</html>