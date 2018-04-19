<?php 


 if(isset($_POST['submit'])) 
 {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];

 	if(isset($n1) && isset($n2))
 	{

	 		if(isset($_POST['r']))
	 		{

  	 			$operation=$_POST['r'];

	 			switch($operation)
	 			{
	 				case '+':
	 				$result = $n1 + $n2;
	 				break;


	 				case '-':
	 				$result = $n1 - $n2;
	 				break;

	 				case '*':
	 				$result = $n1 * $n2;
	 				break;

	 				case '/':
	 				$result = $n1 / $n2;
	 				break;

	 				case '%':
	 				$result = $n1 % $n2;
	 				break;


	 			}

	 		}
	 		else
	 		{
	          echo "select the operation first";
	 	    }

	    }
	    else
	    {
	       echo 'please enter the no. first';

	    }

 }





?>



<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
<center>
<h1 style="font-size: 20px;">CALCULATOR</h1>
</center>
<hr>
<center>
	<form  method="POST" >
		Enter first no. :<p><input type="number" name="num1" value="<?php if(isset($n1)){echo $n1;}?>"></p>
	    
	    Enter second no. :<p><input type="number" name="num2" value="<?php if(isset($n2)){echo $n2;}?>">  </p>
	    

	    <h1>Select The Operation</h1>
        <p><input type="radio" name="r" value="+">&nbsp;addition </p>
        
        <p><input type="radio" name="r" value="-">&nbsp;subtraction </p>
        
        <p><input type="radio" name="r" value="*">&nbsp;multiplication </p>
        
        <p><input type="radio" name="r" value="/">&nbsp;division </p>
        
        <p><input type="radio" name="r" value="%">&nbsp;modulo </p>
        </br>
        
        <p> <input type="submit" name="submit"></p>  </br>     
		
		<h2 style="color: blue;"> OUTPUT : <?php echo $result; ?></h2>

	</form>

</center>
</body>
</html>