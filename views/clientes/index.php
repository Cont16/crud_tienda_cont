<?php

include_once '../templates/header.php';
?>

<div class="container justify-content-center mt-3">
    
    <div class="row">
        <div class="col">
            <h1 class="text-center mb-2">REGISTRO DE CLIENTES</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">

            <form action="/crud_2025/Controller/clientes/guardar.php" method="POST" class="form-control" >
                <div class="row mb-3">
                    <label for="cli_nombres">INGRESE SU NOMBRE</label>
                    <input type="text" name="cli_nombres"  class="form-control" placeholder="Ingrese aca tu nombre" required>
                </div>
        
                <div class="row mb-3">
                    <label for="cli_apellidos">INGRESE SU APELLIDO</label>
                    <input type="text" name="cli_apellidos"  class="form-control" placeholder="Ingresa tu Apellido" required >
                </div>
        
                <div class="row mb-3">
                    <label for="cli_telefono">TELEFONO</label>
                    <input type="number" name="cli_telefono"  class="form-control" placeholder="Ingresa aca tu numero de telefono" required>
                </div>
        
                <div class="row mb-3">
                    <label for="cli_nit">NIT</label>
                    <input type="number" name="cli_nit"  class="form-control" placeholder="Ingresa aca tu numero de NIT" required>
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