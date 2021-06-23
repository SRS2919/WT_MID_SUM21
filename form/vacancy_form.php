<?php
$vtitle="";
$err_vtitle="";
$vid="";
$err_vid="";
 
$hasError=false;
 
if($_SERVER["REQUEST_METHOD"]=="POST")
	
	{
		 
   
    if(empty($_POST["vtitle"]))
   {
	  $hasError=true; 
	  $err_vtitle="*Vacancy Title required";
   }
   elseif(strlen($_POST["vtitle"])<6)
   {
	  $hasError=true;  
	  $err_vtitle="*Vacancy Title Must be at least 6 characters";
   }
   else
   {
	 $vtitle=$_POST["vtitle"];  
	 
   }
   
   
    
		if(empty($_POST["vid"]))
   {
	  $hasError=true; 
	  $err_vid="*Vacancy Id required";
   }
   else
   {
	 $vid=$_POST["vid"];  
   }
   
   
    
 
    
 
   
if(!$hasError)
{
 
echo $_POST["vtitle"]."<br>";	
echo $_POST["vid"]."<br>";	
echo $_POST["submit"]."<br>";
}

 
}	

?>


<html>
<head>
    <title>Vacancy Form</title>
</head>
<body>
<fieldset>
<legend><h2>Vacancy Form</h2></legend>
<form action="" method="post">
<table>
 

                
				
                <tr>
                    <td align="right" ><span>VacancyTitle</span></td>
                    <td>: <input type="text" name="vtitle"><span style="color:red"><?php echo $err_vtitle; ?></span> </td>
                </tr>

                <tr>
                    <td align="right"  ><span>VacancyId</span></td>
                    <td>: <input type="password" name="vid"> 
				 <span style="color:red"><?php echo $err_vid; ?></span>
                      </td>
                </tr>

                
					<tr>
						<td align="right"><input type="submit"   name="submit"></td>
				</tr>




 </table>
 </form>
        
</fieldset>
   

</body>
</html>