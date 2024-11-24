<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/agregarRespuesta.php';
require_once 'modelosRequest/agregarRequest.php';
require_once '../../modelo/ejecutivoCuenta.php';

//se obtiene el body
$json = file_get_contents('php://input',true);
// Convertir el body en un objeto
$req = json_decode($json);

$resp= new AgregarRespuesta();

$ec = new EjecutivoCuenta();
$ec->Id = 1;
$ec->Descripcion = $req->DescripcionEjecutivoDeCuenta;
$ec->Usuario = "anonimo";


$resp->EjecutivoCuentas = $ec;

//Devolver el objeto indicado en el response, 
//valorilzado del sigiente manera
//id 1
//descripcion [DescriopcionEjecutivoDeCuenta del request]
//Usuario anonimo


echo json_encode ($resp);