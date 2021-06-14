<html>
<head>
<title>
problem two
</title>
</head>

<body>


<font color="blue" size="5px"> <u><b> Problem 2 </b></u> </font><br><br>

<?php
$marks=90;

if($marks>=90)
{
	echo"The Grade is : A+";
}

elseif($marks>=80 && $marks<90)
{
	echo "The Grade is : A";
}
 
 elseif($marks>=70 && $marks<80)
{
	echo "The Grade is : B";
}
elseif($marks>=60 && $marks<70)
{
	echo "The Grade is : C";
}
else
{
	echo "The Grade is : F";
}

?>
</body>
</html>