<script src="vistas/js/sweetalert2.all.js"></script>

<?php
class ControladorUsuarios{
    

    //LOGIN

    static public function ctrIngresoUsuario(){
        if(isset($_POST["ingUsuario"])){
            if(preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingUsuario"])&& 
            preg_match('/^[a-zA-Z0-9]+$/',$_POST["ingPassword"])){
                $tabla="usuarios";
                $item="usuario";
                $valor=$_POST["ingUsuario"];
                $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla,$item,$valor);

                $enciptar = crypt($_POST["ingPassword"],'$2a$07$used3v3l0pm3ntsalt$');

                if($respuesta["usuario"]==$_POST["ingUsuario"] && $respuesta["password"]==$enciptar){
                    echo '<br> <div class="alert alert-success">Bienvenido al Sistema</div>';

                    $_SESSION["iniciarSesion"]="ok";
                    $_SESSION["id"]=$respuesta["id"];
                    $_SESSION["nombre"]=$respuesta["nombre"];
                    $_SESSION["usuario"]=$respuesta["usuario"];
                    $_SESSION["foto"]=$respuesta["foto"];
                    $_SESSION["perfil"]=$respuesta["perfil"];



                    echo'<script>
                    window.location="inicio";

                    </script>';
                }else{
                    echo '<br><div class="alert alert-danger">Error al Ingresar, Vuelve a Intentarlo </div>';
                }

            }

        }
    }

    //CREAR USER

    static public function ctrCrearUsuario(){
        
       if(isset($_POST["nuevoUsuario"])){
           if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["nuevoNombre"])&&
           preg_match('/^[a-zA-Z0-9]+$/',$_POST["nuevoUsuario"])&&
           preg_match('/^[a-zA-Z0-9]+$/',$_POST["nuevoPassword"])){
               $ruta ="";
               //validando imagen

            if(isset($_FILES["nuevaFoto"]["tmp_name"])){
                list($ancho,$alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);

                $nuevoAncho=500;
                $nuevoAlto=500;

                //crear directorio

                $directorio="vistas/img/usuarios/".$_POST["nuevoUsuario"];
                mkdir($directorio,0755);

                //funciones de acuerdo al tipo de imagen

                //paraJPEG

                if($_FILES["nuevaFoto"]["type"]=="image/jpeg"){
                    $aleatorio = mt_rand(100,999);
                    $ruta = $directorio."/".$aleatorio.".jpg";
                    $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);
                    $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);

                    imagecopyresized($destino,$origen,0,0,0,0,$nuevoAncho,$nuevoAlto,$ancho,$alto);
                    imagejpeg($destino,$ruta);
                }

                //para PNG
                if($_FILES["nuevaFoto"]["type"]=="image/png"){
                    $aleatorio = mt_rand(100,999);
                    $ruta = $directorio."/".$aleatorio.".png";
                    $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);
                    $destino = imagecreatetruecolor($nuevoAncho,$nuevoAlto);

                    imagecopyresized($destino,$origen,0,0,0,0,$nuevoAncho,$nuevoAlto,$ancho,$alto);
                    imagepng($destino,$ruta);
                }

            }



            $enciptar = crypt($_POST["nuevoPassword"],'$2a$07$used3v3l0pm3ntsalt$');

            //insertando en la DB

            $tabla = "usuarios";
            $datos = array("nombre"=>$_POST["nuevoNombre"],"usuario"=>$_POST["nuevoUsuario"], "password"=>$enciptar,
                            "perfil"=>$_POST["nuevoPerfil"],
                            "foto"=>$ruta);
                            $respuesta=ModeloUsuarios::mdlIngresarUsuario($tabla,$datos);
                            if($respuesta=="ok"){
                                   
        echo '<script>
        
                    swal({
                        type:"success",
                        title:"¡El usuario ha sido registrado!",
                        showConfirmButton:true,
                        confirmButtonText:"Cerrar",
                        closeOnConfirm:false
                    }).then((result)=>{
                        if(result.value){
                            window.location="usuarios";
                        }
                    });
                </script>';

                            }else{
                                   
                                echo '<script>
                                
                                swal({
                                    type:"error",
                                    title:"¡El usuario no puedo registrarte error al insertar en BDD!",
                                    showConfirmButton:true,
                                    confirmButtonText:"Cerrar",
                                    closeOnConfirm:false
                                }).then((result)=>{
                                    if(result.value){
                                        window.location="usuarios";
                                    }
                                });
                            </script>';
                            }
           
           }else{
          
        
        
        echo '<script>
        
                swal({
                    type:"error",
                    title:"¡El usuario no puede ir vacío o llevar caracteres especiales!",
                    showConfirmButton:true,
                    confirmButtonText:"Cerrar",
                    closeOnConfirm:false
                }).then((result)=>{
                    if(result.value){
                        window.location="usuarios";
                    }
                });
            </script>';

       }
     }

}

    //MOSTRAR USUARIOS
    static public function ctrMostrarUsuarios($item,$valor){
        
        $tabla="usuarios";
        

        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla,$item,$valor);

        return $respuesta;


    }



}