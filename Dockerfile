FROM	debian:buster

COPY ./srcs/ /root/

WORKDIR /root

EXPOSE 80 443

RUN apt-get update && apt-get upgrade && apt-get install -y \
	nginx\
	vim\
	wget\
	mariadb-server\
	mariadb-client\
	php-mbstring\
	php-gettext\
	php-fpm \
	php-cgi \
	php-common \
	php-net-socket \
	php-mysql \
	php-zip \
	php-gd \
	php-xml-util \
	php-bcmath \
	php-pear

#RUN apt-get clean && rm -rf /var/lib/apt/lists/*

COPY ./srcs/nginx.conf /etc/nginx/sites-available/default

RUN openssl req -x509 -nodes -days 365 \
	-subj  "/C=RU/ST=14/L=NERUNGRI/O=PUPKINIDUDKIN/OU=IT/CN=localhost.com" \
	-newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key \
	-out /etc/ssl/certs/nginx-selfsigned.crt; 

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-english.tar.gz && \
	tar -zxvf phpMyAdmin-5.1.0-english.tar.gz && \
	mv phpMyAdmin-5.1.0-english /var/www/html/phpmyadmin && \
	mv config.inc.php /var/www/html/phpmyadmin/

RUN wget https://wordpress.org/latest.tar.gz && \
	tar -zxvf latest.tar.gz && \
	mv wordpress /var/www/html/wordpress && \
	mv wp-config.php /var/www/html/wordpress/

RUN chown -R www-data:www-data * && \
	chmod 755 /var/www/*

CMD ["bash", "run.sh"]