<!DOCTYPE html>
<html>
<head>
	<title> Form Data</title>
	<style>
		body{
    font-family: Tahoma, serif;
    font-size: 18px;
}
input{
    margin: 10px 0;
    padding: 0 5px;
}
input[type="text"], input[type="age"]{
    width: 200px;
    height: 30px;
}
input[type="submit"]{
    width: 130px;
    height: 40px;
    font-size: 22px;
    color: gif;
}
label{color: gray;}
	</style>
</head>
<body>
	<div>
	<form method="get">
		<input type="text" name="name" placeholder="Name" /><br />
		<input type="text" name="age" placeholder="Age" /><br />
		<input type="radio" name="gender" value="male" />
		<label for="male">Male</label><br />
		<input type="radio" name="gender" value="female" />
		<label for="female">Female</label><br />
		<input type="submit" value="submit" />
	</form>
	</div>

<?php
    if (isset($_GET['name'])&& isset($_GET['age'])&& isset($_GET['gender'])) {
        $name = $_GET['name'];
		$age = $_GET['age'];
		$gender = $_GET['gender'];
		echo 'My name is '.htmlentities($name).' I am '.htmlentities($age).' years old I am '.htmlentities($gender);
    }
?>
</body>
</html>
