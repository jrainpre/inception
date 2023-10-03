FROM debian:buster

#install
RUN apt-get update && apt-get install -y \
    curl \
    php-fpm \
    php-mysql

#copy config to fpm
COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/
COPY ./conf/wp-config.php / 
#PHP directory  for php-fpm
 RUN mkdir -p /run/php && chown www-data:www-data /run/php

RUN mkdir -p /var/www/html/
WORKDIR /var/www/html

#copy script and launch
COPY ./tools/script.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/script.sh
#script to wait for maria db
COPY ./tools/wait-for-it.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/wait-for-it.sh
ENTRYPOINT ["/usr/local/bin/script.sh"]

CMD   ["/usr/sbin/php-fpm7.3", "-F"]
