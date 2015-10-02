#!/bin/bash -x

service httpd start
service mysqld start

echo "create database sasha;CREATE USER 'sasha'@'%' IDENTIFIED BY 'grey';grant select on sasha.* to sasha@'%';" | mysql -u root -pverylongandhard
mysql -u root -pverylongandhard -h 127.0.0.1 sasha < /root/hack3.sql

echo "Server 3 is ready \m/"
echo "Press [CTRL+P+Q] to detach"
while true; do sleep 1; done
