<!DOCTYPE html>
<html lang="en">
<head>
    <base href="'.BASE_URL.'">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras</title>
</head>
<body>

    <h1>Figuras</h1>

    <a href="listado">Ver todas las figuras geométricas</a>


    <h4> <h4>
    <form action="filtro" method="GET">
        <label for="area">Buscar figuras con área menor a: </label>
        <input id="area" type="number" name="area" placeholder="Introduzca área...">
        <button type="submit">Buscar</button>
    </form>
