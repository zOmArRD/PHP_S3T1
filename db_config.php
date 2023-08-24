<?php declare(strict_types=1);
/*
 * Created by PhpStorm
 *
 * User: zOmArRD
 * Date: 23/8/2023
 *
 * Copyright (c) 2023. OMY TECHNOLOGY by <dev@zomarrd.me>
 */

$host = "localhost";
$user = "root";
$pass = "omar";
$db = "s3t1";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    die("Error al conectarse a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error);
}
