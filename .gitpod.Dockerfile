FROM gitpod/workspace-mysql

RUN locale-gen en_US en_US.UTF-8 en_US.ISO-8859-15 es_ES es_ES.UTF-8 es_ES@euro

ENV LANG=es_ES.UTF-8
