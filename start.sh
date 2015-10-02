#!/bin/bash

service httpd start
service mysqld start

echo "create database hackbase;grant usage on *.* to hackbase@127.0.0.1 identified by 'nonopapaji';grant all privileges on hackbase.* to hackbase@127.0.0.1;" | mysql -u root -pverylongandhard
mysql -u hackbase -h 127.0.0.1 -pnonopapaji hackbase < /root/hackbase.sql

echo "Welcome to Hackbase! The Game is ready to be played: http://$(ip -o -f inet addr | grep -v "127.0.0" | cut -d/ -f1 | sed -r "s/[ \t]+/ /g" | cut -d" " -f4 | head -n1) \m/"
echo "Press [CTRL+P+Q] to detach"
while true; do sleep 1; done
