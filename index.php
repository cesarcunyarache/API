<?php

use App\Config\ErrorLog;
use App\Config\ResponseHttp;

require './vendor/autoload.php';

ResponseHttp::headerHttpPro($_SERVER['REQUEST_METHOD'],$_SERVER['HTTP_ORIGIN']);//CORS Producción
// ResponseHttp::headerHttpDev($_SERVER['REQUEST_METHOD']); //CORS Desarrollo
ErrorLog::activateErrorLog();

/* 
setcookie("token", "ieiejmsxix3$$%&/&%$#DDDQ233", time() + 120, "/");
 */

if (isset($_GET['route'])) {

    $params = explode('/', $_GET['route']);
    $list = ['cliente', 'clienteAuth', 'reserva'];
    $file = './src/Routes/' . $params[0] . '.php';

    if (!in_array($params[0], $list)) {
        echo json_encode(ResponseHttp::status400());
        /* error_log("Holaaaaa", 3, '/Logs/php-error.log'); */
        exit;
    }

    if (is_readable($file)) {
        require $file;
        exit;
    } else {
        echo json_encode(ResponseHttp::status500('El archivo de la ruta no esta creado'));
    }
} else {
    echo json_encode(ResponseHttp::status500());
    exit;
}
