<html>
<body>
<h1>ELECTRICITY BILL</H1>
<FORM method="post" action="#">
Consumer ID: <input type="number" name="id"><br><br>
Name: <input type="text" name="name"><br><br>
Unit Consumed: <input type="number" name="units"><br><br>
<input type="submit">
<input type="reset">
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$id=$_POST['id'];
$name=$_POST['name'];
$units=$_POST['units'];
echo "<h3>KSEB</h3>";
echo "Consumer ID: ".$id."<br>";
echo "Unit Consumed:". $units."<br>";
if($units<=100)
{
$amt=$units*3;
}
else if($units>100 && $units<=200)
{
$amt=$units*4;
}
else if($units>200 && $units<=300)
{
$amt=$units*5;
}
else
{
$amt=$units*6;
}
echo "<h4> Total Rupees:".$amt."</h4><br>";}
?>
</body>
</html>
