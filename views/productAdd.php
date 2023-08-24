<?php declare(strict_types=1);
/*
 * Created by PhpStorm
 *
 * User: zOmArRD
 * Date: 23/8/2023
 *
 * Copyright (c) 2023. OMY TECHNOLOGY by <dev@zomarrd.me>
 */
?>

<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <title>Agregar Producto</title>
</head>
<body>
<h1>Agregar Producto</h1>
<form method='POST' action='index.php?action=agregar'>
    <label for='producto'>Nombre del Producto:>
        <input type='text' name='producto' required>
    </label>
    <br>
    <label for='cantidad'>Cantidad:>
        <input type='number' name='cantidad' required>
    </label>
    <br>
    <label for='precio'>Precio:>
        <input type='number' step='0.01' name='precio' required>
    </label>
    <br>
    <input type='submit' value='Agregar'>
</form>
<br>
<a href="index.php?action=listar">Lista de Productos</a>
</body>
</html>
