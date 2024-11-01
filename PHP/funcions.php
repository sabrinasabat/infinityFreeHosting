<?php
    class Producte{
        private $nombreProducto;
        private $precio;
        private $descripcion;
        public $categorias = [];

        //Constructor
        public function __construct($nombreProducto, $descripcion, $precio)
        {
            $this->nombreProducto = $nombreProducto;
            $this->precio = $precio;
            $this->descripcion = $descripcion;
        }

        //Getters y Setters
        public function getNombreProducto():string{
            return $this->nombreProducto;
        }

        public function getPrecio(){
            return $this->precio;
        }

        public function getDescripcion():string{
            return $this->descripcion;
        }

        public function setNombreProducto($nombreProducto){
            $this->nombreProducto = $nombreProducto;
        }

        public function setPrecio($precio){
            if($precio<=0){
                throw new InvalidArgumentException("El precio no puede ser menor a 0");
                //Excepción en PHP que se utiliza para indicar que un argumento no es válido.
            }
            $this->precio = $precio;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }
    }

    class Categoria{
        private $nombre;
        private $descripcion;

        //Constructor
        public function __construct($nombre, $descripcion)
        {
            $this-> nombre = $nombre;
            $this-> descripcion = $descripcion;
        }

        // Getters y Setters
        public function getNombre():string{
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getDescripcion():string{
            return $this->descripcion;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }
    }

    //Funciones
    function crearProducte($nombre, $descripcion, $precio){
        if($nombre ==='' || $descripcion ==='' || $precio <=0){
            throw new InvalidArgumentException("El nombre,la descripcion o el precio no puede ser vacio.");
            //Excepción en PHP que se utiliza para indicar que un argumento no es válido.
        }
        return new Producte($nombre, $descripcion, $precio);
    }

    function crearCategoria($nombre, $descripcion){
        if($nombre ==='' || $descripcion ===''){
            throw new InvalidArgumentException("El nombre o la descripción de la categoría no puede estar vacío.");
            //Excepción en PHP que se utiliza para indicar que un argumento no es válido.
        }
        return new Categoria($nombre, $descripcion);
    }

    //Adiciona una categoría al array de categorías del producto especificado
    function agregarCategoriaAProducte(Producte $producto, Categoria $categoria){
        $producto->categorias[] = $categoria;
    }

    //Fue adicionado $productos en el parametro de la función para facilitar la búsqueda de las categorías
    //a través del atributo categorías presente en la clase Producte.
    function obtenirProductsPorCategoria(Categoria $categoria, $productos){
        $resultados=[];
        foreach($productos as $producto){
            if(in_array($categoria, $producto->categorias)){
                $resultados[]=$producto;
            }
        }
        //Retorna una lista conteniendo todos los productos de la categoría deseada.
        return $resultados;
    }

    //Enseña todos los productos que hacen parte del array productos, junto con su descripción, precio, categoría
    //y la descripción de la categoria.
    function mostrarProductes(array $productos){
        foreach($productos as $producto){
            echo '<b>'. "Nombre: ".'</b>'. $producto->getNombreProducto() ."<br>";
            echo '<b>'. "Precio: ".'</b>'. number_format($producto->getPrecio(), 2, ".")." €" .'<br>';
            echo '<b>'. "Descripcion: ".'</b>'. $producto->getDescripcion() .'<br>';
            foreach ($producto->categorias as $categoria){
                echo '<b>'. "Categoria: ".'</b>'. $categoria->getNombre() ."<br>";
                echo '<b>'. "Descripción Categoría: ". '</b>'.$categoria->getDescripcion() .'<br>';
            }
        }
    }
?>
