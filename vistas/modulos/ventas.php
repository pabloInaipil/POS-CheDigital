
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
      
      Administrar ventas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar ventas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <a href="crear-venta">
  
        <button class="btn btn-primary">
          
          Agregar venta

        </button>

      </a>

      <button type="button" class="btn btn-default pull-right" id="daterange-btn">
        
        <span>
            <i class="fa fa-calendar"></i> Rango de fecha
        </span>

        <i class="fa fa-caret-down"></i>


      </button>

      </div>

      <div class="box-body">
        
       <table id="example1" class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Código factura</th>
           <th>Cliente</th>
           <th>Vendedor</th>
           <th>Forma de pago</th>
           <th>Neto</th>
           <th>Total</th> 
           <th>Fecha</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>


        <?php 

        if(isset($_GET["fechaInicial"])){

          $fechaInicial = $_GET["fechaInicial"];
          $fechaFinal = $_GET["fechaFinal"];

        }else{

           $fechaInicial = null;
          $fechaFinal = null;

        }

          $respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);


    foreach ( $respuesta as $key => $value) {
      
      echo '<tr>

            <td>'.($key+1).'</td>

            <td>'.$value["codigo"].'</td>';

            $itemCliente = "id";
            $valorCliente = $value["id_cliente"];

            $respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

            echo '<td>'.$respuestaCliente["nombre"].'</td>';

            $itemUsuario = "id";
            $valorUsuario = $value["id_vendedor"];

            $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

            echo '<td>'.$respuestaUsuario["nombre"].'</td>

            <td>'.$value["metodo_pago"].'</td>

            <td>'.number_format($value["neto"],2).'</td>

            <td>'.number_format($value["total"],2).'</td>
            
            <td>'.$value["fecha"].'</td>

            <td>

              <div class="btn-group">
                  
                <button class="btn btn-info btnImprimirFactura" codigoVenta="'.$value["codigo"].'" >

                <i class="fa fa-print"></i>

                </button>';

                if($_SESSION["perfil"] == "Administrador"){

                echo '<button class="btn btn-warning btnEditarVenta" idVenta="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger btnEliminarVenta" idVenta="'.$value["id"].'"><i class="fa fa-times"></i></button>';

              }

             echo '</div>  

            </td>

          </tr>';
             }

         ?>
          
          

          
        </tbody>

       </table>

       <?php 

     $eliminarVenta = new ControladorVentas();
    $eliminarVenta -> ctrEliminarVenta();

        ?>

      </div>

    </div>

  </section>

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





