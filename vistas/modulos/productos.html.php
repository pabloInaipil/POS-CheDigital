
 <div class="content-wrapper">

    <section class="content-header">

      <h1>
        Administrar productos
      </h1>

      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar productos</li>
      </ol>

    </section>


    <section class="content">

      
      <div class="box">

        <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          
          Agregar Productos

        </button>


        </div>


        <div class="box-body">

          <table id="example1" class="table table-bordered table-striped dt-responsive tablaUsuarios">

            <thead>
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Imagen</th>
                <th>Código</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Precio de compra</th>
                <th>Precio de venta</th>
                <th>Agregado</th>
                <th>Acciones</th>
                


              </tr>

            </thead>

            <tbody>
              
              <tr>
                 <td>1</td>
                <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>0001</td>
                <td>Lorem ipsum dolor sit amet</td>
                <td>Lorem ipsum</td>
                <td>20</td>
                <td>$ 5.00</td>
                <td>$ 10.00</td>
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
                <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>0001</td>
                <td>Lorem ipsum dolor sit amet</td>
                <td>Lorem ipsum</td>
                <td>20</td>
                <td>$ 5.00</td>
                <td>$ 10.00</td>
                <td>2020-12-11 12:05:32</td>
                <td>
                  <div class="btn-group">
                    
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>



                  </div>
                </td>

              </tr>

              <td>1</td>
                <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>0001</td>
                <td>Lorem ipsum dolor sit amet</td>
                <td>Lorem ipsum</td>
                <td>20</td>
                <td>$ 5.00</td>
                <td>$ 10.00</td>
                <td>2020-12-11 12:05:32</td>
                <td>
                  <div class="btn-group">

                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                  </div>
                </td>


            </tbody>
            


          </table>



         
        </div>
    
        
        
      </div>
      

  </section>
   
</div>
 
<!-- ===========================
  MODAL AGREGAR PRODUCTO
  =============================--> 

 
<div id="modalAgregarProducto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

        <form role="form" method="post" enctype="multipart/form-data">

        <!-- ===========================
             CABEZA DEL MODAL
           =============================--> 

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar producto</h4>

        </div>

         <!-- ===========================
             CUERPO DEL MODAL
           =============================--> 

        <div class="modal-body">

         <div class="box-body">

          <!-- ENTRADA PARA EL CÓDIGO --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-code"></i></span>

               <input type="text" class="form-control input-group-lg"  name="nuevoCodigo" placeholder="Ingresar código" required>

             </div>

           </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN --> 

           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>

               <input type="text" class="form-control input-group-lg"  name="nuevaDescripcion" placeholder="Ingresar descripcion" required>

             </div>

           </div>

            <!-- ENTRADA PARA SELECCIONAR CATEGORIA --> 

            <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-th"></i></span>

               <select class="form-control input-lg" name="nuevaCategoria">

                <option value="">Seleccionar categoria</option>

                <option value="Taladros">Taladros</option>

                <option value="Andamios">Andamios</option>

                <option value="Equipos para construcion">Equipos para construcion</option>


               </select>

             </div>

           </div>

           <!-- ENTRADA PARA STOCK --> 

           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-check"></i></span>

               <input type="number" class="form-control input-group-lg"  name="nuevoStock" min="0" placeholder="Stock" required>

             </div>

           </div>

              <!-- ENTRADA PARA PRECIO COMPRA --> 

           <div class="form-group row">

            <div class="col-xs-6">

              <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>

               <input type="number" class="form-control input-group-lg"  name="nuevoPrecioCompra" min="0" placeholder="Precio de compra" required>

                </div>
            </div>
              <!-- ENTRADA PARA PRECIO VENTA --> 

              <div class="col-xs-6">

                 <div class="input-group">
               
                 <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>

                  <input type="number" class="form-control input-group-lg"  name="nuevoPrecioVenta" min="0" placeholder="Precio de venta" required>

             </div>

             <br>

             <!--CHECKBOX PARA PORCENTAJE-->

             <div class="col-xs-6">
               
               <div class="form-group">
                 
                 <label>
                   
                   <input type="checkbox" class="minimal porcentaje" checked>
                    Utilizar porcentaje
                 </label>

               </div>

             </div>


             <!--ENTRADA PARA PORCENTAJE-->

             <div class="col-xs-6" style="padding: 0">
               
               <div class="input-group">

                <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                 
                </div>

                 </div>
              </div>
           </div>


            <!-- Entrada para subir foto --> 

            <div class="form-group">
             
          <div class="panel">SUBIR IMAGEN</div>

          <input type="file" id="nuevaImagen" name="nuevaImagen">

          <p class="help-block">Peso máximo de la imagen 2MB</p>

          <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="100px">

           </div>



         </div>

        </div>

         <!-- ===========================
             PIE DEL MODAL
           =============================--> 

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

          <button type="submit" class="btn btn-primary">Guardar producto</button>

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