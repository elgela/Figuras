<?php

function showHome() {
    require_once 'templates/header.php';
}

function showListado() {
require_once 'lib/Figuras.php';

// instancia la clase Figuras para acceder a las figuras
$figuras = new Figuras();

echo "<h1>Listado de figuras</h1>
    <ul>";

foreach($figuras->getAll() as $figura) {
    echo "<li>" . 
            $figura->ToString() . 
            " | <a href='figura?id=" . $figura->getId() . "'>VER </a>" .
         "</li>";
}

echo "
    </ul>
    <a href='./'>Volver</a>";

}

function showFiltrado() {
require_once 'lib/Figuras.php';
require_once 'lib/AreaFilter.php';

// instancio la clase Figuras para trabajar con las figuras del sistema
$figuras = new Figuras();

$area = $_GET['area'];

echo "Las figuras con area menor a $area son:<ul>";
foreach($figuras->getBy(new AreaFilter($area)) as $figura) {
    echo "<li>" . 
            $figura->ToString() . 
            " | <a href='figura?id=". $figura->getId() . "'>VER </a>" .
         "</li>";
}
echo "
    </ul>
    <a href='./'>Volver</a>";
}

function showFigura() {
    require_once 'lib/Figuras.php';

// instancia la clase Figuras para acceder a las figuras
$figuras = new Figuras();

// obtiene la figura según el ID pasado como parámetro
$id = $_GET['id'];
$figura = $figuras->get($id);

// imprime el detalle de la figura
echo "<ul>
        <li><strong>ID: </strong>" . $figura->getId() . "</li>
        <li><strong>Tipo: </strong>" . $figura->getName() . "</li>
        <li><strong>Perímetro: </strong>" . $figura->getPerimetro() . "</li>
        <li><strong>Área: </strong>" . $figura->getArea() . "</li>
    </ul>";
}
