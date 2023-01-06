<?php
include("db.php");
if (isset($_POST['registrar'])){
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['referencia']) >= 1 && strlen($_POST['marca']) >= 1 && strlen($_POST['codigo']) >= 1 && strlen($_POST['cantidad']) >= 1) {
    
        $nombre = trim($_POST['nombre']);
        $referencia = trim($_POST['referencia']);
        $marca = trim($_POST['marca']);
        $codigo = trim($_POST['codigo']);
        $cantidad = trim($_POST['cantidad']);
        $consulta = "INSERT INTO productos(`nombre`, `referencia`, `marca`, `codigo`, `cantidad` ) VALUES ('$nombre','$referencia','$marca','$codigo','$cantidad')";
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