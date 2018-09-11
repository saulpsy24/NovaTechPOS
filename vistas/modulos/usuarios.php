<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Administrar Usuarios
      <small>NovaTech POS</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Administrar Usuarios</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          Agregar Usuario
        </button>



      </div>


      <div class="box-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>
                #
              </th>
              <th>
                Foto
              </th>
              <th>
                Nombre
              </th>
              <th>
                Usuario
              </th>

              <th>
                Rol
              </th>
              <th>
                Status
              </th>
              <th>
                Último login
              </th>
              <th>
                Acciones
              </th>
            </tr>
          </thead>
          <tbody>
            <td>1</td>
            <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
            <td>Usuario Admin</td>
            <td>admin</td>
            <td>Administrador</td>
            <td><button class="btn btn-success btn-xs">Activado</button></td>
            <td>2017-12-11 12:05:32</td>
            <td>
              <div class="btn-group">
                <button class="btn btn-warning btn-xs">
                  <i class="fa fa-pencil"></i>
                </button>
                <button class="btn btn-danger btn-xs">
                  <i class="fa fa-times"></i>

                </button>
              </div>


            </td>

          </tbody>




        </table>




      </div>
      <!-- /.box-body -->

    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<!--MODAL AGREGAR USUARIO-->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        
      <div class="modal-header" style="background:#3c8dbc;color:white">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Usuario</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" name="nuevoNombre" placeholder="Nombre" required class="form-control input-lg">
          </div>

        </div>

        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            <input type="text" name="nuevoUsuario" placeholder="Usuario" required class="form-control input-lg">
          </div>

        </div>

        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="password" name="nuevoPassword" placeholder="Password" required class="form-control input-lg">
          </div>

        </div>

        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-users"></i></span>
            <select name="nuevoPerfil" class="form-control input-lg">
              <option value="">Seleccionar Opcion...</option>
              <option value="administrador">Admin</option>
              <option value="especial">Especial</option>
              <option value="vendedor">Vendedor</option>

            </select>

          </div>
          <div class="form-group">
            <div class="panel text-uppercase">subir foto</div>
            <input type="file" id="nuevaFoto" name="nuevaFoto">
            <p class="help-block">Máximo de 20MB </p>
            <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">

          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
      </div>
    </form>

    </div>
  </div>
</div>