<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
<h1>---- Operacion Multiplicacion---- </h1>

<label>Número 1:</label>
		<input type="number" name="num1"><br>
		<label>Número 2:</label>
		<input type="number" name="num2"><br>
        <input type="submit" name="submit" value="Calcular">
</form>
</body>
</html>
<?php   
	$num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
echo "Multiplicacion: " . ($num1 * $num2) . "<br>";