#### shell
vi /root/.bashrc
alias dps='docker ps'
alias da='docker attach xdebug'
alias dall='docker ps -a'
alias db='docker build -t dockerliweipei/xdebug:latest .'
alias de='docker exec -it xdebug /bin/bash'
alias dl='docker logs xdebug'
alias dis='docker images'
alias dr='docker rm $(docker ps -a -q)'
alias drmi='docker rmi -f $(docker images | awk "{print $3}")'
alias drun='docker run  -d --privileged -p 80:80 -p 8222:22 --name xdebug dockerliweipei/xdebug:latest'
alias dba='ds&&dr&&gr&&dcb'
alias ds='docker stop $(docker ps -a -q)'
alias dcb='docker-compose up -d --build  --force-recreate'
alias dcp='docker-compose push'
alias de='docker exec -it ${ver} bash'
alias dis='docker images'
alias dl='docker logs ${ver}'



source /root/.bashrc

###win7
14. hosts
    C:\Windows\System32\drivers\etc\hosts
    192.168.23.128       q.cn
   192.168.23.128       h.cn

###docker

  db:
    build:
      ./docker/db
    hostname: db
    container_name: db
    image: dockerliweipei/wordpress:db
    volumes:
      - ./db:/var/lib/mysql
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: test
      LANG: C.UTF-8
    ports:
      - 3306:3306
    restart : always
  redis:
    build:
     ./docker/redis
    container_name: redis
    image: redis:latest
    command: redis-server --requirepass "redis" --appendonly yes
    ports:
      - 6379:6379
  memcached:
    build:
     ./docker/memcached
    container_name: memcached
    image: memcached:latest
    ports:
      - 11211:11211




https://hub.docker.com/r/dockerliweipei/xdebug/tags/
https://hub.docker.com/r/dockerliweipei/xdebug/

403是目录不存在

###git
git remote -v 