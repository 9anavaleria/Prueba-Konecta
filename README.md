# Prueba-Konecta
Prueba de conocimiento Konecta

Al entrar a la APP encontras 2 tarjetas donde en Productos podras registrar productos en el formulario y una vez guardados podran ser visualizados en la tabla. Donde podras eliminar y modificar los registros; en Ventas podras registrar las ventas de los productos que has creado anteriormente.

Para poder hacer uso de esta APP es necesario seguir los siguientes pasos:

1. Clonar el repositorio,
2. Modifiacar la configuración de la base de datos
3. Crear base de datos con el siguiente script 
```
CREATE DATABASE cafeteria
    DEFAULT CHARACTER SET = 'utf8mb4';
    
CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `referencia` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `peso` decimal(2,0) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL
);
CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cant_venta` int(11) NOT NULL
);
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

ALTER TABLE `venta`
  ADD PRIMARY KEY (`idventa`),
  ADD KEY `id_prod_idx` (`id_producto`);

ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT;
```
3. Ejecutar el programa.
4. Dirigirse a los modulos donde podra ejecutar las funciones anteriormente descritas.
