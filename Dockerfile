FROM wordpress:latest

COPY --chown=www-data:www-data themes/ /var/www/html/wp-content/themes/
COPY --chown=www-data:www-data plugins/ /var/www/html/wp-content/plugins/
