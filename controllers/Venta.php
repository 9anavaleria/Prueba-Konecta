<?php
require_once "models/dto_models/Producto_dto.php";
require_once "models/dao_models/Producto_dao.php";
require_once "models/dto_models/Venta_dto.php";
    require_once "models/dao_models/Venta_dao.php";
class Venta{
    private $ventaDao;
    private $productoDao;
    public function __construct(){
        $this->ventaDao = new Venta_dao;
        $this->productoDao = new Producto_dao;

    }
    public function index(){
        $venta= '';
        $ver = $this->ventaDao->verVentaDao();
        $productos = $this->productoDao->verProductoDao();
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        }
        elseif($_SERVER['REQUEST_METHOD'] == 'POST'  && !empty($_POST['id_producto']) && !empty($_POST['cant_venta'])){  
            
            $venta_dto = new Venta_dto ($_POST['id_producto'], $_POST['cant_venta']);
            $venta = $this->ventaDao->crearVentaDao($venta_dto);
            if(empty($venta)){
                header("Location: ?c=Venta");
            }
        }else{
            $venta ='Existen campos vacios';
        }

        require_once "views/business/head.php";
        require_once "views/modules/2_venta/venta.view.php";
    }


}
?>