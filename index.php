<?php
require_once "controlador/plantilla.controlador.php";
require_once "controlador/usuarios.controlador.php";
require_once "controlador/categorias.controlador.php";
require_once "controlador/productos.controlador.php";
require_once "controlador/clientes.controlador.php";
require_once "controlador/ventas.controlador.php";


require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";


$plantilla = new ControladorPlantilla();

$plantilla -> ctrPlantilla();