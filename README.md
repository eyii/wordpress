#### shell
vi /root/.bashrc
alias dps='docker ps'
alias da='docker attach xdebug'
alias dall='docker ps -a'
alias db='docker build -t dockerliweipei/xdebug:latest .'
alias de='docker exec -it xdebug /bin/bash'
alias dl='docker logs xdebug'
alias dr='docker rm $(docker ps -a -q)'
alias drmi='docker rmi -f $(docker images | awk "{print $3}")'
alias drun='docker run  -d --privileged -p 80:80 -p 8222:22 --name xdebug dockerliweipei/xdebug:latest'
alias dba='ds&&dr&&gr&&dcb'
alias ds='docker stop $(docker ps -a -q)'
source /root/.bashrc

###win7
14. hosts
    C:\Windows\System32\drivers\etc\hosts
    192.168.23.128       q.cn
   192.168.23.128       h.cn

###docker

https://hub.docker.com/r/dockerliweipei/xdebug/tags/
https://hub.docker.com/r/dockerliweipei/xdebug/

403是目录不存在

###git
git remote -v 