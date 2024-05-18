<?php 

	$conexion=mysqli_connect('localhost','root','apolo23','dawp3');

?>



<!DOCTYPE html>
<html>
<head>
	<title>Listado de alumnos </title>
   
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
        table {
            width: 70%;
            border-collapse: collapse; 
            
            
        }
        th, td {
            border: 1px solid black; 
            padding: 8px; 
            text-align: center; 
        }
        th {
            background-color: #f2f2f2; 
        }
    </style>



<body>
    <br>
    <h2  style="text-align: center;">Listado de alumnos de la materia de Desarrollo de aplicaciones web </h2>
</br>
    <div style="display: flex; flex-direction: column; align-items: center;">

      <form method="post" action="insertardatos.php">
            <div class="mb-2" style="width: 200px;">
              <label for="nombre" class="form-label" id="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" require>
            </div>
            <div class="mb-2"style="width: 200px;" >
               <label for="apellido" class="form-label">Apellido:</label>
               <input type="text" class="form-control" id="apellido" name="apellido" require>
           </div>
           <div class="mb-2" style="width: 200px;">
             <label for="edad" class="form-label">Edad:</label>
             <input type="text" class="form-control" id="edad" name="edad" require>
           </div>
            <div class="mb-2" style="width: 200px;">  
              <label for="seccion" class="form-label">Seleccione la sección:</label> 
              <select class="form-select"  id="seccion" name="seccion">
                   <option value="A">A</option>
                   <option value="B">B</option>
               </select>
            </div>
           </br>
          <button type="submit" class="btn btn-primary">Agregar alumno</button>
    
      </form> 

    </div>
      </br>
<div style="display: flex; flex-direction: column; align-items: center;">
    <table  >
        
           <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Edad</th>
              <th scope="col">Sección</th>
           </tr>
        
  <?php 
		$sql="SELECT * from alumnos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		
            <tr >
                <td ><?php echo $mostrar['nombre'] ?></td>
			          <td><?php echo $mostrar['apellido'] ?></td>
			          <td><?php echo $mostrar['edad'] ?></td>
                <td><?php echo $mostrar['seccion'] ?></td>
            </tr>    

		
	<?php 
	}
	 ?>
		
	</table>
</div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
