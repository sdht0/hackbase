from sdht/hackbase:common
MAINTAINER sdht

ADD http /var/www/html/
ADD start.sh hack3.sql /root/

RUN chmod 755 /root/start.sh && \
    sed -i "338aSetEnv secret_code bigbang\nSetEnv secret_page uppload.php\nSetEnv dbuser sasha\nSetEnv dbpass grey" /etc/httpd/conf/httpd.conf && \
    chown -R apache: /var/www/html/

CMD bash /root/start.sh
