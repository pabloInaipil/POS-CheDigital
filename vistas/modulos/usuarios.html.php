
 <div class="content-wrapper">

    <section class="content-header">

      <h1>
        Administrar usuarios
      </h1>

      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar usuarios</li>
      </ol>

    </section>


    <section class="content">

      
      <div class="box">

        <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          
          Agregar Usuario

        </button>


        </div>


        <div class="box-body">

          <table id="example1" class="table table-bordered table-striped dt-responsive tablaUsuarios">

            <thead>
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Foto</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>Último login</th>
                <th>Acciones</th>
              </tr>

            </thead>

            <tbody>
              
              <tr>
                <td>1</td>
                <td>Usuario Administrador</td>
                <td>admin</td>
                <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs">Activado</button></td>
                <td>2020-12-11 12:05:32</td>
                <td>
                  <div class="btn-group">
                    
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>



                  </div>
                </td>

              </tr>


              <tr>
                <td>1</td>
                <td>Usuario Administrador</td>
                <td>admin</td>
                <td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs">Activado</button></td>
                <td>2020-12-11 12:05:32</td>
                <td>
                  <div class="btn-group">
                    
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>



                  </div>
                </td>

              </tr>


            </tbody>
            


          </table>



         
        </div>
    
        
        
      </div>
      

  </section>
   
</div>
 
<!-- ===========================
  MODAL AGREGAR USUARIO
  =============================--> 

 
<div id="modalAgregarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

        <form role="form" method="post" enctype="multipart/form-data">

        <!-- ===========================
             CABEZA DEL MODAL
           =============================--> 

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar usuario</h4>

        </div>

         <!-- ===========================
             CUERPO DEL MODAL
           =============================--> 

        <div class="modal-body">

         <div class="box-body">

          <!-- Entrada nombre --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-user"></i></span>

               <input type="text" class="form-control input-group-lg"  name="nuevo nombre" placeholder="Ingresar nombre" required>

             </div>

           </div>

            <!-- Entrada Usuario --> 

           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-key"></i></span>

               <input type="text" class="form-control input-group-lg"  name="nuevo usuario" placeholder="Ingresar usuario" required>

             </div>

           </div>

        <!-- Entrada Contraseña --> 

           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-lock"></i></span>

               <input type="password" class="form-control input-group-lg"  name="nuevoPassword" placeholder="Ingresar contraseña" required>

             </div>

           </div>

            <!-- Entrada seleccionar perfil --> 

            <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-users"></i></span>

               <select class="form-control input-lg" name="nuevoPerfil">

                <option value="">Seleccionar perfil</option>

                <option value="Administrador">Administrador</option>

                <option value="Especial">Especial</option>

                <option value="Vendedor">Vendedor</option>


               </select>

             </div>

           </div>

            <!-- Entrada para subir foto --> 

            <div class="form-group">
             
          <div class="panel">SUBIR FOTO</div>

          <input type="file" id="nuevaFoto" name="nuevaFoto">

          <p class="help-block">Peso máximo de la foto 200 MB</p>

          <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="100px">

           </div>



         </div>

        </div>

         <!-- ===========================
             PIE DEL MODAL
           =============================--> 

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>

        </div>

      </form>

    </div>

  </div>
</div>



<!--=============================================
           DATA TABLE   
=============================================--> 

 <script>

  $(function () {

    $('#example1').DataTable({

  "language":{
    "sProcessing":"Procesando...",
    "sLengthMenu":"Mostrar _MENU_ registros",
    "sZeroRecords":"No se encontraron resultados",
    "sEmptyTable":"No hay datos disponibles en esta tabla",
    "sInfo":"Registros del _START_ al _END_ de un total de _TOTAL_",
    "sInfoEmpty":"Registros del 0 al 0 de un total de 0",
    "sInfoFiltered":"(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":"",
    "sSearch":"Buscar:",
    "sUrl":"",
    "sInfoThousands":",",
    "sLoadingRecords":"Cargando...",
    "oPaginate":{
      "sFirst":"Primero",
      "sLast":"Último",
      "sNext":"Siguiente",
      "sPrevious":"Anterior"
    },
    "oAria":{
      "sSortAscending":": Activar para ordenar la columna de manera ascendente",
      "sSortDescending":": Activar para ordenar la columna de manera descendente"
    }
  }
});


    $('#tablaUsuarios').DataTable({

      'paging'      : true,

      'lengthChange': false,

      'searching'   : false,

      'ordering'    : true,

      'info'        : true,

      'autoWidth'   : false

    })

  })

</script>