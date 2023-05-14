<div class="container">
        <div class="row">
            <div class="col-md-10 ">
                <h1 class="titulos mt-1">Editar Producto </h1>
    <hr>
    <div>
                <form class="row g-3 needs-validation" method="post" action="?c=producto&a=modificar_producto"novalidate>  
                <div class="col-md-2">
                        <label for="id_producto" class="form-label">Id producto</label>
                        <input type="number" class="form-control" id="id_producto"  required name="id_producto" placeholder="Id producto" value="<?php echo $producto['id_producto']?>" readonly>
                        </div>    
                    <div class="col-md-4">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre"  required name="nombre" placeholder="Nombre" value="<?php echo $producto['nombre']?>">
                        </div>
                    <div class="col-md-6">
                        <label for="referencia" class="form-label">Referencia</label>
                        <input type="text" class="form-control" id="referencia"  required name="referencia" placeholder="Referencia" value="<?php echo $producto['referencia']?>">
                        </div>
                    <div class="col-md-4 mt-0">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio"  required name="precio" placeholder="Precio" value="<?php echo $producto['precio']?>">
                        </div>
                        <div class="col-md-4">
                        <label for="peso" class="form-label">Peso</label>
                        <input type="number" class="form-control" id="peso"  required name="peso" placeholder="Peso" value="<?php echo $producto['peso']?>">
                        </div>
                    <div class="col-md-4">
                        <label for="categoria" class="form-label">Categoria</label>
                        <input type="text" class="form-control" id="categoria"  required name="categoria" placeholder="Categoria" value="<?php echo $producto['categoria']?>">
                        </div>
                    <div class="col-md-4">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock"  required name="stock" placeholder="Stock" value="<?php echo $producto['stock']?>">
                        </div>
                        <div class="col-md-4">
                        <label for="fecha_creacion" class="form-label">Fecha de creación</label>
                        <input type="date" class="form-control" id="fecha_creacion"  required name="fecha_creacion" placeholder="Fecha de creación" value="<?php echo $producto['fecha_creacion']?>">
                        </div>
                    
                    
                   
                        <input type="submit" class="btn btn-enviar mt-2 ">
                        </form>
                    
                    
               

            </div>
        </div>
    </div>


</div>
</body>

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
