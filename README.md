# Datos de la plantilla [![Gitpod Ready-to-Code](https://img.shields.io/badge/Gitpod-Ready--to--Code-blue?logo=gitpod)](https://gitpod.io/#https://github.com/ojgarciab/yt-juegos-caracteres)

En esta plantilla disponemos de:

* Documento de plantilla HTML 5 + Bootstrap 4.1.3 + jQuery 3.3.1.
* Archivo `composer.json` vacío, listo para ser usado.
* Servidor Apache2 con PHP activo.
* Servidor MySQL con gestión mediante phpMyAdmin.

Enlaces de interés:

* https://php.net/es/htmlspecialchars

## Arreglo para ISO-8859-15:

    ini_set('default_charset', 'ISO-8859-15');
    mb_internal_encoding('ISO-8859-15');

## Arreglo para UTF-8:

    ini_set('default_charset', 'UTF-8');
    mb_internal_encoding('UTF-8');
