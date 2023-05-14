<body>
    <div class="container">
      <?php if(!empty($alerta)){ ?>
        <div class="row">
          <div class="alert alert-danger" role="alert">
          <?php echo $alerta ?>
          </div>
        </div>
        <?php }?>
    <h1 class="titulos mt-1">Producto</h1>
    <hr><div class="row tablas">
      <div class="col-md-2">
        <form method="post" action="?c=producto" class="row g-3 needs-validation" novalidate>         
          <input type="text" class="form-control mb-3" name="nombre" id="nombre" placeholder="Nombre">
          <input type="text" class="form-control mb-3" name="referencia" id="referencia" placeholder="Referencia">
          <input type="number" class="form-control mb-3" name="precio" id="precio" placeholder="Precio">
          <input type="number" class="form-control mb-3" name="peso" id="peso" placeholder="Peso">
          <input type="text" class="form-control mb-3" name="categoria" id="categoria" placeholder="Categoria">
          <input type="number" class="form-control mb-3" name="stock" id="stock" placeholder="Stock">
          <input type="date" class="form-control mb-3" name="fecha_creacion" id="fecha_creacion"placeholder="Fecha">
          <input type="submit" class="btn btn-enviar mt-2 ">
        </form>
      </div>
        <div class="div col-md-10">
          <table class="table justify-content-center col-11 ">
            <thead>
              <th scope="col">Id producto</th>
              <th scope="col">Nombre</th>
              <th scope="col">Referencia</th>
              <th scope="col">Precio</th>
              <th scope="col">Peso</th>
              <th scope="col">categoria</th>
              <th scope="col">Stock</th>
              <th scope="col">Fecha de creación</th>
              <th scope="col">Modificar</th>
              <th scope="col">Eliminar</th>
            </thead>
            <tbody>
              <?php foreach ($ver as $prod) { ?>
              <tr>
                <td class="text-center"><?php echo $prod['id_producto']; ?></td>
                <td class="text-center"><?php echo $prod['nombre']; ?></td>
                <td class="text-center"><?php echo $prod['referencia']; ?></td>
                <td class="text-center"><?php echo $prod['precio']; ?></td>
                <td class="text-center"><?php echo $prod['peso']; ?></td>
                <td class="text-center"><?php echo $prod['categoria']; ?></td>
                <td class="text-center"><?php echo $prod['stock']; ?></td>
                <td class="text-center"><?php echo $prod['fecha_creacion']; ?></td>
                <td class="text-center"><a class="btn btn-warning" href="?c=Producto&a=editar_producto&id_producto=<?php echo $prod['id_producto']?>"><i class="bi bi-pencil-square"></i></a></td>
                            <td  class="text-center"><a class="btn btn-danger" href="?c=Producto&a=eliminar_producto&id_producto=<?php echo $prod['id_producto']?>"><i class="fa fa-trash"></i></a></td>
              </tr>
              <tbody>
              <?php } ?>
</table>
</div>
</div>
</div>

<script>
   $("#stock").change(function(){
    console.log($("#stock").val())
    if($("#stock").val()<0)
            $("#stock").val(0)
        }); 
   $("#precio").change(function(){
    console.log($("#precio").val())
    if($("#precio").val()<0)
            $("#precio").val(0)
        }); 
  </script>

