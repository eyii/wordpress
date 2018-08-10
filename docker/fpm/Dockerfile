FROM dockerliweipei/xdebug:nginx7.0
RUN  apt install -y net-tools iputils-ping
EXPOSE 9000
CMD /usr/local/sbin/php-fpm  -D&&tail -f /dev/null


