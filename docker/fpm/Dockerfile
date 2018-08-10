FROM dockerliweipei/xdebug:nginx7.0
RUN  apt install -y net-tools iputils-ping
ADD www.conf /usr/local/etc/php-fpm.d
EXPOSE 9000
CMD /usr/local/sbin/php-fpm  -D&&tail -f /dev/null


