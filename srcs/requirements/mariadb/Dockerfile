FROM debian:buster


RUN apt-get update -y && apt-get install mariadb-server -y

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

COPY ./tools/script.sh /
RUN chmod +x /script.sh

EXPOSE 3306

ENTRYPOINT  ["/script.sh"]
CMD ["mysqld_safe"]
