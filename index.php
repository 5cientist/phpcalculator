<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<form>
	

  <div class="form-group ">
    <label class="">Enter first number
    <input type="number" class="form-control" name="number1" ></label>
	<br>
	<label class="">Enter secound number
    <input type="number" class="form-control" name="number2" ></label>
	<br>
	<br>
	<label>select operator :</label>
		<select name="oper" class="col-md-1">
			<option>select</option>
			<option>add</option>
			<option>sub</option>
			<option>multi</option>
			<option>division</option>
		</select>
    <br>
    <br>
    <button type="submit" name="submited" value="submit">Result</button>
    
</div>
</form>
<?php

if (isset($_GET['submited'])) {
	$num1=$_GET['number1'];
	$num2=$_GET['number2'];
	$op=$_GET['oper'];

	switch ($op) {
		case "select":	
		echo "select any operations";
		break;
		case "add":
		echo $num1+$num2;
		break;
		case "sub":
		echo $num1-$num2;
		break;
		case "multi":
		echo $num1*$num2;
		break;
		case "division":
		echo $num1/$num2;
		break;				
		
	}
}

?>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>