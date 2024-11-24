<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarRespuesta.php';
require_once '../../modelo/ejecutivoCuenta.php';

$resp= new ConsultarRespuesta();

$ec = new EjecutivoCuenta();
$ec->Id = $_GET['id'];
$ec->Descripcion = "ejecutivo1";
$ec->Usuario = "comercial";

$resp->EjecutivoCuenta = $ec;

echo json_encode ($resp);