# FROM php:7.4-fpm-alpine

# RUN apk add --no-cache nginx supervisord wget

# RUN mkdir -p /run/nginx

# COPY docker/nginx.conf /etc/nginx/nginx.conf

# RUN mkdir -p /app
# COPY . /app

# RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
# RUN cd /app && \
#     /usr/local/bin/composer install --no-dev

# RUN chown -R www-data: /app

# CMD sh /app/docker/startup.sh



FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo_mysql mbstring

WORKDIR /app
COPY composer.json .
RUN composer install --no-scripts
COPY . .

CMD php artisan serve --host=0.0.0.0 --port 80
