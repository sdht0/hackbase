#!/bin/bash


printf "unzip\nstrip\ntouch\nfinger $(ping -c1 server3 | grep data | cut -f2 -d'(' | cut -d ')' -f1)\ngrep\nmount\nfsck\nmore\nyes\nfsck\nfsck\numount\nsleep\n" > /home/eyeofmauron/.bash_history && \
chmod -R ugo+rx /home/eyeofmauron/

service vsftpd start
service sshd start
nohup python2 /root/ports.py &

echo "Server 2 is ready \m/"
echo "Press [CTRL+P+Q] to detach"
while true; do sleep 1; done
