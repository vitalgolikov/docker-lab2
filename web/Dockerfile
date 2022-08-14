FROM httpd:latest
RUN apt update &&  \
    apt install -y php php-mysql libapache2-mod-php git
WORKDIR /var/www/html
RUN git clone https://github.com/FaztWeb/php-mysql-crud.git
COPY db.php /var/www/html/php-mysql-crud/
COPY 000-default.conf /etc/apache2/sites-available
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]



