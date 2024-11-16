FROM php:8.2.25-alpine as build

COPY --chown=code:code . /app

RUN composer install --prefer-dist --no-dev

FROM build

ENV HTTP_PORT=8080

USER code

COPY --from=build-node /app/public /app/public

RUN php artisan optimeze:clear

EXPOSE $HTTP_PORT

#all done your gicu-app is up and runnig
CMD ["/sbin/entrypoint.sh"]
