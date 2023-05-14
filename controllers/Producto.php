<?php
    require_once "models/dto_models/Producto_dto.php";
    require_once "models/dao_models/Producto_dao.php";
    class Producto{
        private $productoDao;
        public function __construct(){
            $this->productoDao = new Producto_dao;
        }
        public function index(){
            $ver = $this->productoDao->verProductoDao();
            $alerta = '';
            if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_producto'])){
            $result = $this->productoDao->consultarProductoDao($_GET['id_producto']);
            $producto_dto = new Producto_dto($result[0],$result[1]);
            $producto_dto->setIdProducto($result[0]);
            
            }
            elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
                if ( !empty($_POST['nombre']) && !empty($_POST['referencia']) && !empty($_POST['precio']) && !empty($_POST['peso']) && !empty($_POST['categoria']) && !empty($_POST['stock']) && !empty($_POST['fecha_creacion'])){  
                    $producto_dto = new Producto_dto ($_POST['id_producto'], $_POST['nombre'], $_POST['referencia'], $_POST['precio'], $_POST['peso'], $_POST['categoria'], $_POST['stock'], $_POST['fecha_creacion']);
                    $this->productoDao->crearProductoDao($producto_dto);
                    header("Location: ?c=Producto");
                }
                else{
                    $alerta ='Existen campos vacios';
                }
        }

            require_once "views/business/head.php";
        require_once "views/modules/1_inventario/producto.view.php";
        }
        public function editar_producto(){
            $producto = $this->productoDao->consultarProductoDao($_GET['id_producto'])[0];
            require_once "views/business/head.php";
        require_once "views/modules/1_inventario/producto.editar.php";
        }
        public function modificar_producto(){
            $producto_dto = new Producto_dto ($_POST['id_producto'], $_POST['nombre'], $_POST['referencia'], $_POST['precio'], $_POST['peso'], $_POST['categoria'], $_POST['stock'], $_POST['fecha_creacion']);
            $this->productoDao->modificarProductoDao($producto_dto);
            header("Location: ?c=Producto");

        }
        public function eliminar_producto(){
            $this->productoDao->eliminarProductoDao($_GET['id_producto']);
            header("Location: ?c=Producto");

        }
    }
    
?>