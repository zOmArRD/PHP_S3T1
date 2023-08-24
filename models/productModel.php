<?php declare(strict_types=1);

/*
 * Created by PhpStorm
 *
 * User: zOmArRD
 * Date: 23/8/2023
 *
 * Copyright (c) 2023. OMY TECHNOLOGY by <dev@zomarrd.me>
 */

class productModel
{
    private mysqli $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function obtenerProductos(): mysqli_result|bool
    {
        $query = 'SELECT * FROM productos';
        return $this->conn->query($query);
    }

    public function insertarProducto($producto, $cantidad, $precio, $subtotal, $total): bool
    {
        $query = 'INSERT INTO productos (producto, cantidad, precio, subtotal, total) VALUES (?, ?, ?, ?, ?)';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('siddd', $producto, $cantidad, $precio, $subtotal, $total);
        return $stmt->execute();
    }
}
