<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
    <center>
    <h3>----Menu operaciones y registro de datos en php-----<h3>
	<form method="POST">
		<label>Opciones:</label><br>
		
            <label value="1">1.Datos de usuario</label><br>
			<label value="2">2.Suma</label><br>
			<label value="3">3.Resta</label><br>
			<label value="4">4.Multiplicación</label><br>
			<label value="5">5.División</label><br>
		
            <label>Seleccion</label>
		<input type="number" name="op"><input type="submit" name="submit" value="seleccion"><br>
		

       
	</form>

	<?php
		if(isset($_POST['submit'])) {
			
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$op = $_POST['op'];

			
			switch($op) {
                case '1':
                    header("Location: formulario.php");
					break;
				case '2':
                    header("Location: suma.php");
					
					break;
				case '3':
                    header("Location: resta.php");
					break;
				case '4':
                    header("Location: multiplicacion.php");
					break;
				case '5':
                    header("Location: division.php");
					break;
				default:
					echo "Operación no válida<br>";
			}
		}
	?>
</body>
</html>
