
 <?php 

  if($_SESSION["perfil"] == "Especial"){

    echo '<script>

    window.location = "inicio";

    </script>';

    return;

  }


 ?>

 <div class="content-wrapper">

    <section class="content-header">

      <h1>
        Administrar clientes
      </h1>

      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar clientes</li>
      </ol>

    </section>


    <section class="content">

      
      <div class="box">

        <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">
          
          Agregar cliente

        </button>


        </div>


        <div class="box-body">

          <table id="example1" class="table table-bordered table-striped dt-responsive tablas">

            <thead>
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Documento ID</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Fecha de nacimiento</th>
                <th>Total compras</th>
                <th>Última compra</th>
                <th>Ingreso al sistema</th>
                <th>Acciones</th>

              </tr>

            </thead>

            <tbody>

              <?php 

              $item = null;
              $valor = null;


              $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

              foreach ($clientes as $key => $value) {
                
                echo '  <tr>

                          <td>'.($key+1).'</td>
                          <td>'.$value["nombre"].'</td>
                          <td>'.$value["documento"].'</td>
                          <td>'.$value["email"].'</td>
                          <td>'.$value["telefono"].'</td>
                          <td>'.$value["direccion"].'</td>
                          <td>'.$value["fecha_nacimiento"].'</td>
                          <td>'.$value["compras"].'</td>
                          <td>'.$value["ultima_compra"].'</td>
                          <td>'.$value["fecha"].'</td>

                          <td>

                          <div class="btn-group">
                            
                      <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'""><i class="fa fa-pencil"></i></button>';

                      if($_SESSION["perfil"] == "Administrador"){

                      echo '<button class="btn btn-danger btnEliminarCliente" idCliente="'.$value["id"].'""><i class="fa fa-times"></i></button>';

                        }

                           echo '</div>


                          </td>

                        </tr>';


              }


               ?>
              
            

            </tbody>
            
          </table>
 
        </div>
      
      </div>

  </section>
   
</div>
 
<!-- ===========================
  MODAL AGREGAR CLIENTE
  =============================--> 

 
<div id="modalAgregarCliente" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

        <form role="form" method="post">

        <!-- ===========================
             CABEZA DEL MODAL
           =============================--> 

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar cliente</h4>

        </div>

         <!-- ===========================
             CUERPO DEL MODAL
           =============================--> 

        <div class="modal-body">

         <div class="box-body">

          <!-- Entrada NOMBRE --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-user"></i></span>

               <input type="text" class="form-control input-group-lg"  name="nuevoCliente" placeholder="Ingresar nombre" required>

             </div>

           </div>

               <!-- Entrada para DOCUMENTO ID --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-key"></i></span>

               <input type="number" min="0" class="form-control input-group-lg"  name="nuevoDocumentoId" placeholder="Ingresar documento" required>

             </div>

           </div> 

              <!-- Entrada para EMAIL --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

               <input type="email" class="form-control input-group-lg"  name="nuevoEmail" placeholder="Ingresar email" required>

             </div>

           </div>  

                <!-- Entrada para TELEFONO --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-phone"></i></span>

               <input type="text" class="form-control input-group-lg"  name="nuevoTelefono" placeholder="Ingresar telefono" data-inputmask="'mask':'(569) 99999999'" data-mask required>

             </div>

           </div> 
            <!-- Entrada para DIRECCION --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

               <input type="text" class="form-control input-group-lg"  name="nuevaDireccion" placeholder="Ingresar dirección" required>

             </div>

           </div> 

           <!-- Entrada para FECHA NACIMIENTO --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

               <input type="text" class="form-control input-group-lg"  name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

             </div>

           </div> 


       </div>
        </div>

         <!-- ===========================
             PIE DEL MODAL
           =============================--> 

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cliente</button>

        </div>

      </form>

        <?php 

      $crearCliente = new ControladorClientes();
      $crearCliente -> ctrCrearCliente();

       ?>

    </div>

  </div>
</div>

<!-- ===========================
  MODAL EDITAR CLIENTE
  =============================--> 

 
<div id="modalEditarCliente" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

        <form role="form" method="post">

        <!-- ===========================
             CABEZA DEL MODAL
           =============================--> 

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar  cliente</h4>

        </div>

         <!-- ===========================
             CUERPO DEL MODAL
           =============================--> 

        <div class="modal-body">

         <div class="box-body">

          <!-- Entrada NOMBRE --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-user"></i></span>

               <input type="text" class="form-control input-group-lg"  name="editarCliente" id="editarCliente" required>
               <input type="hidden" id="idCliente" name="idCliente">


             </div>

           </div>

               <!-- Entrada para DOCUMENTO ID --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-key"></i></span>

               <input type="number" min="0" class="form-control input-group-lg"  name="editarDocumentoId" id="editarDocumentoId"  required>

             </div>

           </div> 

              <!-- Entrada para EMAIL --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

               <input type="email" class="form-control input-group-lg"  name="editarEmail" id="editarEmail"  required>

             </div>

           </div>  

                <!-- Entrada para TELEFONO --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-phone"></i></span>

               <input type="text" class="form-control input-group-lg"  name="editarTelefono" id="editarTelefono"  data-inputmask="'mask':'(569) 99999999'" data-mask required>

             </div>

           </div> 
            <!-- Entrada para DIRECCION --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

               <input type="text" class="form-control input-group-lg"  name="editarDireccion" id="editarDireccion"  required>

             </div>

           </div> 

           <!-- Entrada para FECHA NACIMIENTO --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

               <input type="text" class="form-control input-group-lg"  name="editarFechaNacimiento" id="editarFechaNacimiento"  data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

             </div>

           </div> 


       </div>
        </div>

         <!-- ===========================
             PIE DEL MODAL
           =============================--> 

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

      <?php 

      $editarCliente = new ControladorClientes();
      $editarCliente -> ctrEditarCliente();


       ?>
 
    </div>

  </div>
</div>

   <?php 

      $eliminarCliente = new ControladorClientes();
      $eliminarCliente -> ctrEliminarCliente();


       ?>






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


    $('#tablas').DataTable({

      'paging'      : true,

      'lengthChange': false,

      'searching'   : false,

      'ordering'    : true,

      'info'        : true,

      'autoWidth'   : false

    })

  })

</script>