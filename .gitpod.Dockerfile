FROM gitpod/workspace-mysql

RUN sed -ri 's/^#? ?(en_US|es_ES)/\1/' /etc/locale.gen && sudo locale-gen

ENV LANG=es_ES.UTF-8
