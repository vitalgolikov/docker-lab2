FROM httpd:latest
RUN apt update &&  \
    apt install -y php php-mysql libapache2-mod-php
WORKDIR /var/www/html
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]



