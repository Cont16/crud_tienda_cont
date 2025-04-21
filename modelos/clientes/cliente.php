<?php

include_once '../../modelos/conexion.php';

class Cliente extends Conexion
{

    public $cli_id;
    public $cli_nombres;
    public $cli_apellidos;
    public $cli_telefono;
    public $cli_nit;
    public $cli_situacion;

    public function __construct($args = [])
    {
        $this->cli_id = $args['cli_id'] ?? null;
        $this->cli_nombres = $args['cli_nombres'] ?? '';
        $this->cli_apellidos = $args['cli_apellidos'] ?? '';
        $this->cli_telefono = $args['cli_telefono'] ?? '';
        $this->cli_nit = $args['cli_nit'] ?? '';
        $this->cli_situacion = $args['cli_situacion'] ?? 1;
    }

    public function guardar()
    {

        $sql = "INSERT INTO clientes(cli_nombres, cli_apellidos, cli_nit, cli_telefono, cli_situacion)
                VALUES (:nombre, :apellidos, :nit, :telefono, :situacion)";
        $params = [
            ':nombre' => $this->cli_nombres,
            ':apellidos' => $this->cli_apellidos,
            ':nit' => $this->cli_nit,
            ':telefono' => $this->cli_telefono,
            ':situacion' => $this->cli_situacion
        ];

        return $this->ejecutar($sql, $params);
    }
}