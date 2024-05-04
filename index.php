<?php 

	$conexion=mysqli_connect('localhost','root','apolo23','dawp3');

?>



<!DOCTYPE html>
<html>
<head>
	<title>Listado de alumnos</title>
   
</head>

<body>
    <br>
    <h2>Listado de alumnos de la materia de Desarrollo de aplicaciones web </h2>
</br>
    <form method="post" action="insertardatos.php">
        <label for="nombre">Nombre del alumno:</label>
        <input type="text" id="nombre" name="nombre" required>
        </br>
        </br>
        
        <label for="apellido">Apellido:</label>
        <input id="apellido" name="apellido" required></input>
        </br>
        </br>
        
        <label for="edad">Edad:</label>
        <input type="text" id="edad" name="edad" required>
        </br>
        </br>

        <label for="seccion">Seleccionar sección:</label>
        <select id="seccion" name="seccion" required>
            <option value="A">Sección A</option>
            <option value="B">Sección B</option>
            
         </select>
         </br>
         </br>
        
        <input type="submit" value="Agregar Alumno">
    </form>
    <br>

    <table border="2" cellpadding="10" cellspacing="0">
		<tr>
			
			<td>nombre:</td>
			<td>apellido:</td>
			<td>edad</td>
            <td>seccion</td>
			
		</tr>
        <?php 
		$sql="SELECT * from alumnos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['edad'] ?></td>
            <td><?php echo $mostrar['seccion'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
		
	</table>

</body>
</html>
