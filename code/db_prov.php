<?php
include("db.php");
if (isset($_POST['registrar'])){
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['nit']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['productos']) >= 1) {
    
        $nombre = trim($_POST['nombre']);
        $nit = trim($_POST['nit']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $correo = trim($_POST['correo']);
        $productos = trim($_POST['productos']);
        $consulta = "INSERT INTO proveedor(nombre,nit,direccion,telefono,correo,productos) VALUES ('$nombre','$nit','$direccion','$telefono','$correo','$productos')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) { 
           ?>
           <h3 class="ok">Datos ingresados correctamente</h3>
           <?php
         }else {
            ?>
            <h3 class="bad">errorsillo</h3>
        <?php
        }
    }
}
?>