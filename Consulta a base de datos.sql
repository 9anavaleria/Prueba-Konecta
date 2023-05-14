Consulta Base de datos

#Realizar una consulta que permita conocer cuál es el producto que más stock tiene.
    Opcion 1
         SELECT * FROM producto where `stock` = (SELECT MAX(`stock`) FROM producto);
    Opcion 2
        SELECT * FROM producto ORDER BY `stock` DESC limit 1;

#Realizar una consulta que permita conocer cuál es el producto más vendido.
    SELECT  producto.id_producto AS ID, 
            producto.nombre AS Nombre, 
            producto.referencia AS Refrerencia, 
            producto.precio AS Precio, 
            producto.peso AS Precio, 
            producto.categoria AS Categoria, 
            producto.stock AS Stock, 
            SUM(venta.cant_venta) AS Ventas 
    FROM producto join venta ON producto.id_producto = venta.id_producto 
    GROUP BY producto.nombre 
    ORDER BY Ventas DESC 
    LIMIT 1;
