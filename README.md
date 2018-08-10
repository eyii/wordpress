#### 使用说明
1.vi /root/.bashrc

2.alias da='docker attach xdebug'

3.alias dall='docker ps -a'

4.alias db='docker build -t dockerliweipei/xdebug:latest .'

5.alias de='docker exec -it xdebug /bin/bash'

6.alias dl='docker logs xdebug'

7.alias dr='docker rm $(docker ps -a -q)'

8.alias drun='docker run  -d --privileged -p 80:80 -p 8222:22 --name xdebug dockerliweipei/xdebug:latest'
alias dba='ds&&dr&&gr&&dcb'
9.alias ds='docker stop $(docker ps -a -q)'

10.source /root/.bashrc

11.db

12.drun

13.de

14. hosts
    C:\Windows\System32\drivers\etc\hosts

    192.168.23.128       q.cn
   192.168.23.128       h.cn



https://hub.docker.com/r/dockerliweipei/xdebug/tags/
https://hub.docker.com/r/dockerliweipei/xdebug/

403是目录不存在