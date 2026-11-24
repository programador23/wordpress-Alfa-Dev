FROM wordpress:latest

ENV WORDPRESS_CONFIG_EXTRA="if (isset(\$_SERVER['HTTP_X_FORWARDED_PROTO']) && strpos(\$_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) { \$_SERVER['HTTPS'] = 'on'; }"

COPY --chown=www-data:www-data themes/ /var/www/html/wp-content/themes/
COPY --chown=www-data:www-data plugins/ /var/www/html/wp-content/plugins/
