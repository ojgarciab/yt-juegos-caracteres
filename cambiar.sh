#!/bin/bash

if [ $# -ne 1 ]; then
    echo "Uso: $(basename $0) <UTF-8|ISO-8859-15|etc>"
    exit 0
fi

sed -ri 's/^#?AddDefaultCharset.*$/AddDefaultCharset '$1'/' \
    /etc/apache2/conf-available/charset.conf
sed -ri 's/^#?default_charset.*$/default_charset = "'$1'"/' \
    /etc/php/7.2/apache2/php.ini

apachectl restart
