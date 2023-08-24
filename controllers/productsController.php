<?php
/*
 * Created by PhpStorm
 *
 * User: zOmArRD
 * Date: 23/8/2023
 *
 * Copyright (c) 2023. OMY TECHNOLOGY by <dev@zomarrd.me>
 */

require_once __DIR__ . '/../models/productModel.php';

class productsController
{
    private productModel $model;

    public function __construct($db)
    {
        $this->model = new productModel($db);
    }

    public function list(): void
    {
        $productos = $this->model->obtenerProductos();
        include __DIR__ . '/../views/productsList.php';
    }

    public function add(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $producto = $_POST['producto'];
            $cantidad = $_POST['cantidad'];
            $precio = $_POST['precio'];
            $subtotal = $cantidad * $precio;
            $total = $subtotal;

            if ($this->model->insertarProducto($producto, $cantidad, $precio, $subtotal, $total)) {
                header('Location: index.php?action=listar');
            } else {
                echo 'Error al agregar el producto.';
            }
        } else {
            include __DIR__ . '/../views/productAdd.php';
        }
    }
}

