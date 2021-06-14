<html>
<head>
<title>
problem three
</title>
</head>

<body>


<font color="blue" size="5px"> <u><b> Problem 3 </b></u> </font><br><br>
<?php
$length=10;
$width=10;
$Area=($length*$width);
$Perimeter=2*($length+$width);

echo"Area of the rectangle is = " . $Area . "<br>";
echo"Perimeter of the rectangle is = " . $Perimeter . "<br>";


if($length==$width)
	
	{
		echo "The shape is a Square";
	}
else

{
	echo"The shape is not Square";
}

?>
</body>
</html>