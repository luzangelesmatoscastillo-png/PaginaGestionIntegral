<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('convertir_estatus')) {
    function convertir_estatus($estatus) {
        if ($estatus == "1") {
            return "ACTIVO";
        } else {
            return "INACTIVO";
        }
    }
}