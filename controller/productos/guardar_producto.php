<?php

include_once '../../views/templates/header.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../../modelos/productos/productos_modelo.php';

$_POST['producto_nombre'] = htmlspecialchars($_POST['producto_nombre']);
$_POST['producto_precio'] = filter_var($_POST['producto_precio'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);


try {


    $nuevo_producto = new producto($_POST);
    $producto = $nuevo_producto->guardar();

    $resultado = [
        'mensaje' => 'PRODUCTO INGRESADO SATISFACTORIAMENTE',
        'codigo' => 1
    ];
} catch (Exception $e) {

    $resultado = [
        'mensaje' => 'OCURRIO UN ERROR EN LA EJECUCIÓN',
        'detalle' => $e->getMessage(),
        'codigo' => 0
    ];
}

if ($resultado['codigo'] == 1) {
?>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Bien hecho!</h4>
        <p><?= $resultado['mensaje'] ?></p>
        <hr>
        <p class="mb-0">Ahora puedes consultar los datos en la base de datos</p>
    </div>
<?php
}else {
?>
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Error!</h4>
        <p><?= $resultado['mensaje'] ?></p>
        <hr>
        <p class="mb-0"><?= $resultado['detalle'] ?></p>
    </div>
<?php
}

include_once '../../views/templates/footer.php';
?>