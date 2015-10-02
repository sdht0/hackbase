from sdht/hackbase_internal:common
MAINTAINER sdht

ADD hackbase /var/www/html/
ADD hackbase/.htaccess /var/www/html/
ADD start.sh hackbase.sql /root/

RUN chmod 755 /root/start.sh

CMD bash /root/start.sh
