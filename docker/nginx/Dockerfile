FROM dockerliweipei/xdebug:nginx7.0
ADD ./tools/nginx.conf /etc/nginx/nginx.conf
RUN  apt install net-tools
EXPOSE 80
CMD nginx -g 'daemon off;'
