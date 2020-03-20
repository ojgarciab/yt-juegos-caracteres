FROM gitpod/workspace-mysql

USER root

RUN sed -ri 's/^#? ?(en_US|es_ES)/\1/' /etc/locale.gen && locale-gen

ENV LANG=es_ES.UTF-8
