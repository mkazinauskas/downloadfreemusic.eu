FROM alimashuri/alpine-apache-php5
COPY html/ /web/html
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/httpd.conf \
 && echo "LoadModule rewrite_module modules/mod_rewrite.so" >> /etc/apache2/httpd.conf