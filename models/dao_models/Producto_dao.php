<?php
    class Producto_dao{
        private $pdo;
        public function __construct(){
			try {
				$db = new DataBase();
                $this->pdo = $db->connection();	
                
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}		
        public function verProductoDao(){
            $sql = "SELECT * FROM producto;";
            $resultado = $this->pdo->query($sql);
            $ver = $resultado->fetchAll();
            return $ver;
        }	
        public function consultarProductoDao($idProducto){
            $sql= "SELECT * FROM producto where id_producto=$idProducto";
            $resultado = $this->pdo->query($sql);
            $consulta = $resultado->fetchAll();
            return $consulta; 
        }   
        public function crearProductoDao($producto_dto){
            try{
            $sql = "INSERT INTO producto (`id_producto`, `nombre`, `referencia`, `precio`, `peso`, `categoria`, `stock`, `fecha_creacion`)VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $resultado = $this->pdo->prepare($sql);
            
            $resultado->execute(array($producto_dto->getIdProducto(),$producto_dto->getNombre(),$producto_dto->getReferencia(), $producto_dto->getprecio(), $producto_dto->getPeso(), $producto_dto->getCategoria(), $producto_dto->getStock(), $producto_dto->getFechaCreacion()));
           
            return $resultado->rowCount();
        }
        catch (Exception $e) {
            die("....".$e->getMessage());	
        }
        }
        public function modificarProductoDao($producto_dto){
            try{
            $sql = "UPDATE producto set nombre=?, referencia=?, precio=?, peso=?, categoria=?, stock=?, fecha_creacion=? where id_producto=?";
            $resultado = $this->pdo->prepare($sql);
            
            $resultado->execute(array($producto_dto->getNombre(),$producto_dto->getReferencia(), $producto_dto->getprecio(), $producto_dto->getPeso(), $producto_dto->getCategoria(), $producto_dto->getStock(), $producto_dto->getFechaCreacion(), $producto_dto->getIdProducto()));
           
            return $resultado->rowCount();
        }
        catch (Exception $e) {
            die("....".$e->getMessage());	
        }
        }
        public function eliminarProductoDao($id){
            try{
            $sql = "DELETE from producto where id_producto=?";
            $resultado = $this->pdo->prepare($sql);
            
            $resultado->execute(array($id));
           
            return $resultado->rowCount();
        }
        catch (Exception $e) {
            die("....".$e->getMessage());	
        }
        }

        
     
    }
    
?>