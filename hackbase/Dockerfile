from sdht/hackbase:common
MAINTAINER sdht

ADD webapp /var/www/html/
ADD webapp/.htaccess /var/www/html/
ADD start.sh hackbase.sql /root/

RUN chmod 755 /root/start.sh

CMD bash /root/start.sh
