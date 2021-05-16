#!/bin/bash/
service mysql start

mysql -e "CREATE DATABASE app_db;"
mysql -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';"
mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'admin';"
mysql -e "FLUSH PRIVILEGES;"
service php7.3-fpm start
service nginx start

bash