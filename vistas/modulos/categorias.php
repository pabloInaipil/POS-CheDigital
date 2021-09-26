<?php 

  if($_SESSION["perfil"] == "Vendedor"){

    echo '<scritp>

    window.location = "inicio";

    </script>';

    return;

  }


 ?>
 

 <div class="content-wrapper">

    <section class="content-header">

      <h1>
        Administrar categorías
      </h1>

      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar categorias</li>
      </ol>

    </section>


    <section class="content">

      
      <div class="box">

        <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
          
          Agregar categoría

        </button>


        </div>


        <div class="box-body">

          <table id="example1" class="table table-bordered table-striped dt-responsive tablas">

            <thead>
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Categoría</th>
                <th>Acciones</th>
              </tr>

            </thead>

            <tbody>

              <?php 


              $item = null;
              $valor = null;

           $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

            foreach ($categorias as $key => $value) {
              
              echo '<tr>

                <td>'.($key+1).'</td>

                <td class="text-uppercase">'.$value["categoria"].'</td>

                <td>

                  <div class="btn-group">
                    
           <button class="btn btn-warning btnEditarCategoria" idCategoria="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pencil"></i>
           </button>';

           if($_SESSION["perfil"] == "Administrador"){

          echo '<button class="btn btn-danger btnEliminarCategoria" idCategoria="'.$value["id"].'"><i class="fa fa-times"></i>
          </button>';

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
  MODAL AGREGAR CATEGORÍA
  =============================--> 

 
<div id="modalAgregarCategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

        <form role="form" method="post">

        <!-- ===========================
             CABEZA DEL MODAL
           =============================--> 

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar categoría</h4>

        </div>

         <!-- ===========================
             CUERPO DEL MODAL
           =============================--> 

        <div class="modal-body">

         <div class="box-body">

          <!-- Entrada nombre --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-th"></i></span>

               <input type="text" class="form-control input-group-lg"  name="nuevaCategoria" placeholder="Ingresar categoría" required>

             </div>

           </div>      
       </div>
        </div>

         <!-- ===========================
             PIE DEL MODAL
           =============================--> 

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

          <button type="submit" class="btn btn-primary">Guardar categoría</button>

        </div>

        <?php

        $crearCategoria = new ControladorCategorias();
        $crearCategoria -> ctrCrearCategoria();


        ?> 

      </form>

    </div>

  </div>
</div>


<!-- ===========================
  MODAL EDITAR CATEGORÍA
  =============================--> 

 
<div id="modalEditarCategoria" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

        <form role="form" method="post">

        <!-- ===========================
             CABEZA DEL MODAL
           =============================--> 

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar categoría</h4>

        </div>

         <!-- ===========================
             CUERPO DEL MODAL
           =============================--> 

        <div class="modal-body">

         <div class="box-body">

          <!-- Entrada nombre --> 
           
           <div class="form-group">
             
             <div class="input-group">
               
               <span class="input-group-addon"><i class="fa fa-th"></i></span>

               <input type="text" class="form-control input-group-lg"  name="editarCategoria" id="editarCategoria" required>

               <input type="hidden" name="idCategoria" id="idCategoria" required>

             </div>

           </div>      
       </div>
        </div>

         <!-- ===========================
             PIE DEL MODAL
           =============================--> 

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      <?php

      $editarCategoria = new ControladorCategorias();
      $editarCategoria -> ctrEditarCategoria();


        ?>


        

      </form>

    </div>

  </div>
</div>

   <?php

      $borrarCategoria = new ControladorCategorias();
  $borrarCategoria -> ctrBorrarCategoria();

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