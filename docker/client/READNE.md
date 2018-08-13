

    volumes:
      - ./client/tools/web:/var/www/html
      - ./client/tools/conf.d/:/etc/nginx/conf.d/
      - ./client/tools/nginx.conf:/etc/nginx/nginx.conf