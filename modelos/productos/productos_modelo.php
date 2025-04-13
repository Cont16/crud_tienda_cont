<?php

include_once '../../modelos/conexion.php';

class producto extends Conexion
{

    public $producto_id;
    public $producto_nombre;
    public $producto_precio;
    public $producto_situacion;

    public function __construct($args = [])
    {
        
        $this->producto_nombre = $args['producto_nombre'] ?? '';
        $this->producto_precio = $args['producto_precio'] ?? 0;
       
    }

    public function guardar()
    {

        $sql = "INSERT INTO productos(producto_nombre, producto_precio)
                VALUES ('$this->producto_nombre', '$this->producto_precio')";
        $data = $this->ejecutar($sql);
        return $data;
    }
}