#!/bin/bash


printf "ls\nls -la\nmap *\nping $(ping -c1 server3 | grep data | cut -f2 -d'(' | cut -d ')' -f1)\n" > /home/eyeofmauron/.bash_history && \
chmod -R ugo+r /home/eyeofmauron/

service vsftpd start
service sshd start
nohup python2 /root/ports.py &

echo "Server 2 is ready \m/"
echo "Press [CTRL+P+Q] to detach"
while true; do sleep 1; done
