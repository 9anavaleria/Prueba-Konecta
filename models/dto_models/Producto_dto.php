<?php
class Producto_dto{
    private $idproducto;
    private $nombre;
    private $referencia;
    private $precio;
    private $peso;
    private $categoria;
    private $stock;
    private $fecha_creacion;
    
    public function __construct($idproducto, $nombre, $referencia, $precio, $peso, $categoria, $stock, $fecha_creacion){
        $this->idproducto = $idproducto;
        $this->nombre = $nombre;
        $this->referencia = $referencia;
        $this->precio = $precio;
        $this->peso = $peso;
        $this->categoria = $categoria;
        $this->stock = $stock;
        $this->fecha_creacion = $fecha_creacion;
    }
    public function setIdProducto($idproducto){
        $this->idproducto = $idproducto;
    }
    public function getIdProducto(){
        return $this->idproducto;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setReferencia($referencia){
        $this->referencia = $referencia;
    }
    public function getReferencia(){
        return $this->referencia;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setStock($stock){
        $this->stock = $stock;
    }
    public function getStock(){
        return $this->stock;
    }
    public function setFechaCreacion($fecha_creacion){
        $this->fecha_creacion = $fecha_creacion;
    }
    public function getFechaCreacion(){
        return $this->fecha_creacion;
    }
}
?>