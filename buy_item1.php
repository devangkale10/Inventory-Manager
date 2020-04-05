<!DOCTYPE html>
<html>
<head>
    <title>Buy Item</title>
</head>
<body>
<?php
$link = mysqli_connect("localhost", "root", "", "inventory");
if($link === false){
    die("ERROR: Could not connect. "
                . mysqli_connect_error());
}

$query1 = $_POST['query1'];
if(isset($_POST['query1']))
{
    $sql = "SELECT * FROM items WHERE item_name = '$query1' ";
    if($res = mysqli_query($link, $sql))
    {
        if(mysqli_num_rows($res)>0)
        {
            while($row = mysqli_fetch_array($res))
            {
                echo " ".$row['item_name'];
                echo " ".$row['item_id'];
            }
        }
    }
}
?>
<br>
<form action="buy_item9.php" method="post">
<input type="hidden" name="query1" value="<?php echo $_POST['query1'];?>">
<b>STOCK</b>
<input type="text" name="new_stock1">
<br>
<input type="submit" name="submit" value="BUY">
</form>
</body>
</html>
