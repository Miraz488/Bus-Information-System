<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <?PHP
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        extract($_POST);
        print_r($_POST);
      
    }
	 ?>
	<form method="post">
		<input type="text" name="name">
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>