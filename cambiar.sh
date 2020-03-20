#!/bin/bash

if [ $# -ne 2 ]; then
    cat <<FIN
Uso: $(basename $0) <Apache> <PHP>

Juegos de caracteres:
    UTF-8, ISO-8859-15, etc.

Deshabilitar juego de caracteres en cabecera HTTP:
    Apache: Off
    PHP: none
FIN
    exit 0
fi

echo "AddDefaultCharset $1" > public/.htaccess
echo "php_value default_charset $2" >> public/.htaccess
