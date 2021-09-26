
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

          <table id="example1" class="table table-bordered table-striped dt-responsive tablaCategorias">

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
              
              <tr>

                <td>1</td>

                <td>Pablo Inaipil</td>
                <td>156535583</td>
                <td>pablo.inaipil@gmail.com</td>
                <td>88574082</td>
                <td>Zamora 1614 galicia 3</td>
                <td>17-10-1983</td>
                <td>2017-12-11 12:05:32</td>
                <td>35</td>
                <td>2017-12-11 12:05:32</td>

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

               <input type="text" class="form-control input-group-lg"  name="nuevaCliente" placeholder="Ingresar nombre" required>

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

               <input type="text" class="form-control input-group-lg"  name="nuevoDireccion" placeholder="Ingresar dirección" required>

             </div>

           </div> 

           <!-- Entrada para FECHA NACIMIENTO --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

               <input type="text" class="form-control input-group-lg"  name="nuevoFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

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


    $('#tablaCategorias').DataTable({

      'paging'      : true,

      'lengthChange': false,

      'searching'   : false,

      'ordering'    : true,

      'info'        : true,

      'autoWidth'   : false

    })

  })

</script>