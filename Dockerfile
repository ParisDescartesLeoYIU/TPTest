FROM php:7.4-apache

RUN docker-php-ext-install pdo_mysql

RUN apt-get update && apt-get install -y curl
RUN curl -sL https://deb.nodesource.com/setup_8.x | bash -
RUN apt-get update && apt-get install -y nodejs

RUN npm install

EXPOSE 3000
CMD [ "npm", "run", "watch" ]
