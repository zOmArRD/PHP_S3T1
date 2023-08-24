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
    <title>Lista de Productos</title>
</head>
<body>
<h1>Lista de Productos</h1>
<table border='1'>
    <tr>
        <th>ID</th>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Subtotal</th>
        <th>Total</th>
    </tr>
    <?php
    while ($row = $productos->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['producto'] . '</td>';
        echo '<td>' . $row['cantidad'] . '</td>';
        echo '<td>$' . number_format((float)$row['precio'], 2) . '</td>';
        echo '<td>$' . number_format((float)$row['subtotal'], 2) . '</td>';
        echo '<td>$' . number_format((float)$row['total'], 2) . '</td>';
        echo '</tr>';
    }
    ?>
</table>
<br>
<a href="index.php?action=agregar">Agregar Producto</a>
</body>
</html>
