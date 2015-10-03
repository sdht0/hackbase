#!/bin/bash

service httpd start
service mysqld start

sed -i \
    -e "s/\[IP_TRIPLET\]/$(ip -o -f inet addr | grep -v "127.0.0" | cut -d/ -f1 | sed -r "s/[ \t]+/ /g" | cut -d" " -f4 | head -n1 | cut -d'.' -f1-3)/" \
    -e "s/\[IP_SERVER1\]/$(ping -c1 server1 | grep data | cut -f2 -d'(' | cut -d ')' -f1 | cut -d'.' -f4)/" \
    -e "s/\[IP_SERVER2\]/$(ping -c1 server2 | grep data | cut -f2 -d'(' | cut -d ')' -f1 | cut -d'.' -f4)/" \
    -e "s/\[IP_SERVER3\]/$(ping -c1 server3 | grep data | cut -f2 -d'(' | cut -d ')' -f1 | cut -d'.' -f4)/" \
    -e "s/\[CIPHER\]/$(printf 'x="'$(ping -c1 server1 | grep data | cut -f2 -d'(' | cut -d ')' -f1 | cut -d'.' -f4)'"\nvals={"0":"ZERO","1":"ONE","2":"TWO","3":"THREE","4":"FOUR","5":"FIVE","6":"SIX","7":"SEVEN","8":"EIGHT","9":"NINE"}\nst="FIRSTSERVERIP"\nfor i in x:\n st+=vals[i]\nif len(st)%%5 != 0:\n st+="."*(5-len(st)%%5)\nfor i in range(len(st)/5):\n j=i\n while j<len(st):\n  print st[j],\n  j+=len(st)/5\n' | python2 | tr -d " ")/" \
    /root/hackbase.sql

echo "create database hackbase;grant usage on *.* to hackbase@127.0.0.1 identified by 'nonopapaji';grant all privileges on hackbase.* to hackbase@127.0.0.1;" | mysql -u root -pverylongandhard
mysql -u hackbase -h 127.0.0.1 -pnonopapaji hackbase < /root/hackbase.sql

echo "Welcome to Hackbase! The Game is ready to be played: http://$(ip -o -f inet addr | grep -v "127.0.0" | cut -d/ -f1 | sed -r "s/[ \t]+/ /g" | cut -d" " -f4 | head -n1) \m/"
echo "Press [CTRL+P+Q] to detach"
while true; do sleep 1; done
