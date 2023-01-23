FROM prestashop/prestashop:8.0.1-7.4
# #
RUN rm -rf /var/www/html/

ADD ./prestashop /var/www/html

RUN chmod 755 -R /var/www/html
RUN chown -R www-data:www-data /var/www/html

COPY ./apache2/certs /etc/apache2/certs
COPY ./php.ini /etc/php/7.4/apache2/php.ini
COPY ./apache2/sites-available /etc/apache2/sites-available


RUN apt-get update
RUN apt update
#RUN add-apt-repository ppa:ondrej/php
#RUN apt-get update
RUN apt-get install -y libz-dev libmemcached-dev && \
apt-get install -y memcached libmemcached-tools && \
pecl install memcached && \
docker-php-ext-enable memcached

#RUN apt install openssl

#RUN apt install sendmail -y
# RUN apt-get install -y \
#         zlib1g-dev libzip-dev sendmail

# RUN echo "sendmail_path=/usr/sbin/sendmail -t -i" >> /usr/local/etc/php/conf.d/sendmail.ini 
# RUN sed -i '/#!\/bin\/sh/aservice sendmail restart' /usr/local/bin/docker-php-entrypoint
# RUN sed -i '/#!\/bin\/sh/aecho "$(hostname -i)\t$(hostname) $(hostname).localdomain" >> /etc/hosts' /usr/local/bin/docker-php-entrypoint
#RUN sed -i '/#!\/bin\/sh/aecho "$(hostname -i)\tlocalhost localhost.localdomain localhost" >> /etc/hosts' /usr/local/bin/docker-php-entrypoint

#
# RUN apt install memcached libmemcached-tools -y
# RUN apt-get install zlib1g-dev libxml2-dev -y
# RUN apt-get install php-memcached 

RUN service memcached start
#???
#RUN service sendmail start 
#???
RUN a2enmod ssl

RUN a2ensite default-ssl





###############################################
# FROM php:7.4-apache

# RUN apt-get update
# #RUN apt-get install libapache2-mod-php7.4 php7.4-gd php7.4-mbstring php7.4-mysql php7.4-curl php7.4-xml php7.4-cli php7.4-intl php7.4-zip unzip -y
# #RUN systemctl restart apache2
# #ENV APACHE_DOCUMENT_ROOT /var/www/html/
# ADD  ./filedump/prestashop /var/www/html/prestashop



# ADD ./apache2/certs /etc/apache2/certs
# ADD ./apache2/sites-available /etc/apache2/sites-available
# #ADD ./apache2/sites-enabled /etc/apache2/sites-enabled
# #ADD ./apache2/mods-enabled /etc/apache2/mods-enabled

# #RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
# #RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf