#!/bin/bash -x

service httpd start
service mysqld start

sed -i \
    -e "s/\[IP_SERVER1_F\]/$(ip -o -f inet addr | grep -v "127.0.0" | cut -d/ -f1 | sed -r "s/[ \t]+/ /g" | cut -d" " -f4 | head -n1)/" \
    -e "s/\[IP_SERVER2_F\]/$(ping -c1 server2 | grep data | cut -f2 -d'(' | cut -d ')' -f1)/" \
    /root/hack1.sql

echo "create database hack1;grant usage on *.* to hack1@127.0.0.1 identified by 'hack1';grant all privileges on hack1.* to hack1@127.0.0.1;" | mysql -u root -pverylongandhard
mysql -u hack1 -h 127.0.0.1 -phack1 hack1 < /root/hack1.sql

echo "Server 1 is ready \m/"
echo "Press [CTRL+P+Q] to detach"
while true; do sleep 1; done
