<form action=" " method="post">
                        <div class="form-floating form-control-sm mb-3 ">
                            <input name="nombre" type="text " class="form-control " placeholder="name ">
                            <label for="nombre"> Nombre Completo </label>
                        </div>
                        <br>
                        <div class="form-floating form-control-sm mb-3 ">
                            <input name="email" type="email " class="form-control " placeholder="email ">
                            <label for="email"> E-mail </label>
                        </div>
                        <br>
                        <div class="form-floating form-control-sm mb-3 ">
                            <input name="empresa" type="empresa " class="form-control " placeholder="company ">
                            <label for="empresa"> Compañia </label>
                        </div>
                        <br>
                        <div class="form-floating form-control-sm mb-3 ">
                            <input name="tel" type="tel " class="form-control " placeholder="tel " maxlength="10" required>
                            <label for="tel"> Numero de teléfono </label>
                        </div>
                        <div class="modal-footer ">
                            <button type="submit " class="btn btn-primary "> Enviar </button>
                        </div>
                    </form>
                    
<?php

    //error_reporting(E_ERROR | E_PARSE);
    $conexion = mysqli_connect("localhost", "u899500393_jairjimarez200", "JairjimUNI21", "u899500393_Cliente");
    if (!$conexion){
        die("Connection failed: " . mysqli_connect_error());
    }
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $empresa = $_POST["empresa"];
    $tel = $_POST["tel"];
    
    echo "$nombre";
    if(isset($nombre)){
    $query = "insert into usuario(Nombre, Correo, Empresa, Telefono) values('$nombre', '$email', '$empresa', '$tel')";
    if (mysqli_query($conexion, $query)) {
        //echo "New record created successfully";
        echo $nombre;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conexion);
    }
}
    mysqli_close($conexion);

    ?>