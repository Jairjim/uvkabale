<?php 
//Se conecta a la base de datos 
$connection = mysqli_connect("localhost", "u899500393_DenunciaSegura", "Denuncia1", "u899500393_denunciasegura");

//Se obtiene la variable por metodo post que se manda por una funcion de javascript
$estado=$_POST['id_estado'];

//Se obtienen los datos de los municipios de cierto estado en especifico
$datos_municipio_estado = mysqli_query($connection, "select id_municipio, nombre from municipios where '$estado' = id_estado");

//Se crea el input select sin opciones
	echo "<select class='custom-select mr-sm-2 form-select' name='Municipio' id='Municipio' autofocus placeholder='Tipo de denuncia' required>
			<option value = 0 selected> Selecciona el municipio donde sucedió </option>";

//Se itera el query obtenido
	while ($resultado=mysqli_fetch_row($datos_municipio_estado)) {
        echo "<option value= $resultado[0] id='Estados'> $resultado[0] - $resultado[1]   </option> ";
	}

	echo "</select>";
?>