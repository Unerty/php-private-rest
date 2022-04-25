FROM oberd/php-8.1-apache
COPY src /var/www/html
RUN rm -rf /etc/apache2/apache2.conf
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY apache2.conf /etc/apache2/apache2.conf
EXPOSE 80