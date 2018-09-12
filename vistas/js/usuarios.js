//SUBIR FOTO DE USUARIO
$("#nuevaFoto").change(function(){
    var imagen = this.files[0];
    console.log(imagen.name);
    //validando que sea jpg o png

    if(imagen["type"] != "image/jpeg" && imagen["type"]!="image/png"){
        $("#nuevaFoto").val("");
        swal({

            title:"error al subir la imagen",
            text:"Solo se acepta formato: PNG o JPG",
            type:"error",
            confirmButtonText:"Cerrar!"
        });
    }else if(imagen["size"]>20000000){
        $("#nuevaFoto").val("");
        swal({

            title:"error al subir la imagen",
            text:"Tamaño de archivo excede 20MB",
            type:"error",
            confirmButtonText:"Cerrar!"
        });
    }else{
        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);
        $(datosImagen).on("load",function(event){
            var rutaImagen = event.target.result;
            $("#imgUser").attr("src",rutaImagen);
        })
    }

});