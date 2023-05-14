<?php
class Venta_dao{
    private $pdo;
    public function __construct(){
        try {
            $db = new DataBase();
            $this->pdo = $db->connection();	
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }	
    public function verVentaDao(){
        try{ 
            $sql= "SELECT v.idventa, p.id_producto, p.nombre, v.cant_venta FROM venta v inner join producto p ON v.id_producto = p.id_producto;";
            $resultado = $this->pdo->query($sql);
            $ver = $resultado->fetchAll();
            return $ver;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function consultarVentaDao($idventa){
        try{
            $sql= "SELECT * FROM venta where idventa=$idventa";
            $resultado = $this->pdo->query($sql);
            $consulta = $resultado->fetchAll();
            return $consulta; 
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function crearVentaDao($venta_dto){
        try { 
            $sql = "SELECT stock FROM producto where id_producto=?";
            $rstock = $this->pdo->prepare($sql);
            $rstock->execute(array($venta_dto->getIdProducto()));
            $resultstock = $rstock->fetch();
            
            if ($resultstock['stock'] > 0 && $venta_dto->getCant() <= $resultstock['stock']){
                $sql = "INSERT INTO venta ( `id_producto`, `cant_venta`) VALUES ( ?, ?)";
                $resultado = $this->pdo->prepare($sql);
                $resultado->execute(array($venta_dto->getIdProducto(), $venta_dto->getCant()));
       
                $sqlrest = "UPDATE producto SET stock = ? WHERE id_producto = ?";
                $resultrest = $this->pdo->prepare($sqlrest);
                $resta = $resultstock['stock'] - $venta_dto->getCant();
                $resultrest->execute(array($resta, $venta_dto->getIdProducto())); 
            }else{
                return 'No se puede realizar la venta revisar stock';
            }
        }
        catch (Exception $e) {
            die("....".$e->getMessage());	
        }
    }
}
    

?>