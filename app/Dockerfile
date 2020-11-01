FROM php:7.4-cli

EXPOSE 80
WORKDIR /app

COPY . /code
WORKDIR /code

ENTRYPOINT ["php", "-S", "0.0.0.0:80", "gauss_api.php"]