<?php
header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarTodosRespuesta.php';
require_once '../../modelo/ejecutivoCuenta.php';

$resp = new ConsultarTodosRespuesta();

$ec = new EjecutivoCuenta();
$ec->Id = 1;
$ec->Descripcion = "ejecutivo1";
$ec->Usuario = "comercial";

$ec1 = new EjecutivoCuenta();
$ec1->Id = 2;
$ec1->Descripcion = "ejecutivo2";
$ec1->Usuario = "javkin";


$ec3 = new EjecutivoCuenta();
$ec3->Id = 3;
$ec3->Descripcion = "ejecutivo2";
$ec3->Usuario = "javkin";

$ec4 = new EjecutivoCuenta();
$ec4->Id = 4;
$ec4->Descripcion = "ejecutivo2";
$ec4->Usuario = "javkin";

$resp->ListEjecutivosCuentas[] = $ec; 
$resp->ListEjecutivosCuentas[] = $ec1;
$resp->ListEjecutivosCuentas[] = $ec3;
$resp->ListEjecutivosCuentas[] = $ec4;

foreach ($resp->ListEjecutivosCuentas as $ecc) {
    $resp->IdUsados = $resp->IdUsados . $ecc->Id . '|' ;
}

echo json_encode ($resp);