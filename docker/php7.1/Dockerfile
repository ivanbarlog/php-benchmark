FROM php:7.1-cli

RUN mkdir -p /var/www/test
ADD . /var/www/test

WORKDIR /var/www/test

ENTRYPOINT ["php", "-d", "memory_limit=-1", "/var/www/test/benchmark.php"]
