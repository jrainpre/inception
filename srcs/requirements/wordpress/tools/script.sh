#!/bin/bash

#remove old stuff if there is any
rm -rf *

 #download wordpress cli
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

 #shortcut wordpress to wp to use it from anywhere
 chmod +x wp-cli.phar
 mv wp-cli.phar /usr/local/bin/wp
 
 #download most recent core files --allow-root so we dont have to create a user
  wp core download --allow-root
  
 #cp the sample config we copied to correct folder
  cp /wp-config.php /var/www/html/
  
 #replace, make sure to use double quotes otherwise env var wont get replaced
  sed -i "s/database_name_here/$db_name/g" wp-config.php
  sed -i "s/username_here/$db_user/g" wp-config.php
  sed -i "s/password_here/$db_pass/g" wp-config.php
  sed -i "s/localhost/mariadb/g" wp-config.php
  
  mkdir -p /var/www/html
  cd /var/www/html/
 wait-for-it.sh mariadb:3306 -t 60
 #instal homepage, create user, install a theme
  wp core install --url=$domain_name --title="Jonathan's inception 🚀" --admin_user=$wp_admin --admin_password=$wp_adminpass --admin_email=$wp_adminmail --allow-root
  wp user create $wp_user $wp_email --role=contributor --user_pass=$wp_pass --allow-root
  wp theme install twentytwenty --activate --allow-root
  wp plugin update --all --allow-root
  
 exec "$@"
