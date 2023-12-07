<?php

use App\Config\ResponseHttp;
use App\Controllers\ProductoController;

$params  = explode('/', $_GET['route']);

$app = new ProductoController();

$app->postCreate("producto/");

$app->getRead("producto/read");

$app->postUpdateProducto("producto/update");

echo ResponseHttp::status404();
