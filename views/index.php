<?php declare(strict_types=1);
/*
 * Created by PhpStorm
 *
 * User: zOmArRD
 * Date: 23/8/2023
 *
 * Copyright (c) 2023. OMY TECHNOLOGY by <dev@zomarrd.me>
 */
require_once __DIR__ . '/../db_config.php';
require_once __DIR__ . '/../controllers/productsController.php';

global $conn;

$db = $conn;
$controller = new productsController($db);

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'listar':
            $controller->list();
            break;
        case 'agregar':
            $controller->add();
            break;
        default:
            echo 'Acción no válida.';
    }
} else {
    $controller->list();
}
