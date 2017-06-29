#Examples
#http://blog.webmaniacs.net/v/398867694/docker-php-composer
#https://gist.github.com/andyshinn/e2c428f2cd234b718239


FROM composer/composer:php7



MAINTAINER Vench <nowwrit@gmail.com>

RUN echo 1111

#ENTRYPOINT ["chmod", "-R", "777", "/code/app/cache", "/code/app/logs"]
 

#ENTRYPOINT ["php", "app/console", "doctrine:database:create"]




WORKDIR /var/www/html
ENTRYPOINT ls
ENTRYPOINT composer install --prefer-source --no-interaction

CMD ["true"]
