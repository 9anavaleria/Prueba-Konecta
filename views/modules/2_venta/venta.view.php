<body>
    <div class="container">
    <?php if(!empty($venta)){ ?>
        <div class="row">
          <div class="alert alert-danger" role="alert">
          <?php echo $venta ?>
          </div>
        </div>
        <?php }?>
    <h1 class="titulos mt-1">Venta</h1>
    <hr><div class="row tablas">
      <div class="col-md-3">
        <form method="post" action="?c=venta" class="row g-3 needs-validation" novalidate>         
        <label for="id_producto">Producto</label>
        <select class="form-control" name="id_producto" id="id_producto">
            <option>Seleccione</option>
        <?php foreach ($productos as $value) { ?>
            <option value ="<?php echo $value['id_producto']; ?>"><?php echo $value['nombre']; ?></option>
            <?php } ?>
    </select>
    <br>
    <br>
    <label for="cant_venta">Cantidad de venta</label>

          <input type="number" class="form-control mb-3" name="cant_venta" id="cant_venta" placeholder="Cantidad de venta">
          <input type="submit" class="btn btn-enviar mt-2 ">
        </form>
      </div>
        <div class="div col-md-9">
          <table class="table justify-content-center col-11 ">
            <thead>
                <th scope="col">Id venta</th>
                <th scope="col">Id Producto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cant.</th>
            </thead>
            <tbody>
  <?php foreach ($ver as $vent) { ?>
  <tr>
    <td class="text-center" ><?php echo $vent['idventa']; ?></td>
    <td class="text-center"><?php echo $vent['id_producto']; ?></td>
    <td class="text-center"><?php echo $vent['nombre']; ?></td>
    <td class="text-center"><?php echo $vent['cant_venta']; ?></td>
    
  </tr>
  <tbody>
  <?php } ?>
</table>   
  </div>
  </div>
  </div>
  <script>
      $("#cant_venta").change(function(){
    console.log($("#cant_venta").val())
    if($("#cant_venta").val()<0)
            $("#cant_venta").val(0)
        }); 
    </script>
