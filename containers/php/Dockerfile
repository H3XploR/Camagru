FROM php:8.2-fpm
RUN docker-php-ext-install pdo pdo_mysql 
COPY ./src /var/www/html
RUN mkdir /var/www/uploads && chown www-data:www-data /var/www/uploads
RUN echo "upload_max_filesize = 25M" > /usr/local/etc/php/conf.d/uploads.ini \
    && echo "post_max_size = 25M" >> /usr/local/etc/php/conf.d/uploads.ini