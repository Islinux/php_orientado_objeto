<?php
require 'clases/producto.php';
require 'models/producto.php';

/* 
    para mostrar los namespace usamos \nombre-namespace\nombreClase() o de esta otra manera
    use nombre-namespace\nombre-clase;
*/
/*--- COM USE ------*/
// use clases\Producto;
// use models\Producto;

/*----------- COM ALIAS -----------------*/
// use models\Producto as ModelProducto;
// use clases\Producto as ClasesProducto;

// $producto = new ClasesProducto();
// $producto->mostrarDetales();
/*-------------------------------------- */

use clases\Producto as ProductoClases;
use models\Producto as ProductoModels;

$producto = new ProductoClases();
$producto->mostrarDetales();

echo "<br>";

$producto2 = new ProductoModels();
$producto2->mostrarDetales();
