<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 17/1/2023
 * Time: 13:00
 */
define('SERVIDOR','mysql.novashop-pe.com');
define('USUARIO','u928333281_markoantonio03');
define('PASSWORD','Nova$hop1017');
define('BD','sistemadeventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexión a la base de datos fue con exito";
}catch (PDOException $e){
    //print_r($e);
    echo "Error al conectar a la base de datos";
}

$URL = "http://milogin.novashop-pe.com";

date_default_timezone_set("America/Caracas");
$fechaHora = date('Y-m-d H:i:s');


