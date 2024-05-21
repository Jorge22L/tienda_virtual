<?php
    //define('BASE_URL', 'http://localhost/tienda_virtual/');
    const BASE_URL = 'http://localhost/tienda_virtual/';
    const LIBS = 'Libraries/';
    const VIEWS = 'Views/';

    //Zona horaria
    date_default_timezone_set('America/Managua');
    
    // datos globales de conexión
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = '1234';
    const DB_NAME = 'tienda';
    const DB_CHARSET = 'utf8';

    //Delimitadores decimales y miles
    const SPD = ".";
    const SPM = ",";

    //Simbolo de moneda
    const SMONEY = "C$";
?>