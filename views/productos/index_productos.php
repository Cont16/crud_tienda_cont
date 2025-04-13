<?php

include_once '../templates/header.php';
?>

<div class="container justify-content-center mt-3">
    
    <div class="row">
        <div class="col">
            <h1 class="text-center mb-2">REGISTRO DE PRODUCTOS</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">

            <form action="../../controller/productos/guardar_producto.php" method="POST" class="form-control" >
                <div class="row mb-3">
                    <label for="cli_nombres">INGRESE EL NOMBRE DEL PRODUCTO</label>
                    <input type="text" name="producto_nombre"  class="form-control" placeholder="Ingrese el nombre del producto" required>
                </div>
        
                <div class="row mb-3">
                    <label for="cli_apellidos">INGRESE EL PRECIO DEL PRODUCTO</label>
                    <input type="text" name="producto_precio"  class="form-control" placeholder="Ingresa el precio del producto" required >
                </div>
        
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <button type="submit"  class="btn btn-success">REGISTRAR</button>
                    </div>
                    <div class="col-lg-6">
                        <button type="reset" class="btn btn-secondary">LIMPIAR</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>

<?php

include_once '../templates/footer.php';
