<?php


require_once "../controlador/usuarios.controlador.php";

require_once "../modelos/usuarios.modelo.php";

class AjaxUsuarios{
    //editar usuario

    
	public $idUsuario;

	public function ajaxEditarUsuario(){

		$item = "id";
		$valor = $this->idUsuario;

		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

		echo json_encode($respuesta);

	}


}




/*Editar Usuario*/

if(isset($_POST["idUsuario"])){
    $editar = new AjaxUsuarios();
    $editar -> idUsuario = $_POST["idUsuario"];
    $editar -> ajaxEditarUsuario();
}  




