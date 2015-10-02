#!/bin/bash -x

service vsftpd start
service sshd start
nohup python2 /root/ports.py &

echo "Server 2 is ready \m/"
echo "Press [CTRL+P+Q] to detach"
while true; do sleep 1; done
