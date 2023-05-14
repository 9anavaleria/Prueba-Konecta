<?php
class Venta_dto{
    private $idventa;
    private $idproducto;
    private $cant;
    public function __construct($idproducto,$cant){
        $this->idproducto = $idproducto;
        $this->cant = $cant;
    }
    public function setIdVenta($idventa){
        $this->idventa = $idventa;
    }
    public function getIdVenta(){
        return $this->idventa;
    }
    public function setIdProducto($idproducto){
        $this->idproducto = $idproducto;
    }
    public function getIdProducto(){
        return $this->idproducto;
    }
    public function setCant($cant){
        $this->cant = $cant;
    }
    public function getCant(){
        return $this->cant;
    }
}
?>