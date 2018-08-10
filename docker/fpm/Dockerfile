FROM dockerliweipei/xdebug:nginx7.0
#FROM php:7.1.20-fpm-stretch
#RUN  apt install -y net-tools iputils-ping
ADD www.conf /usr/local/etc/php-fpm.d/
ADD php-fpm.conf /usr/local/etc/
EXPOSE 9000
CMD /usr/local/sbin/php-fpm  -D&&tail -f /dev/null


