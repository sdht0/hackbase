from centos:centos6
MAINTAINER sdht

RUN yum -y install httpd mysql-server php php-mysql php-pdo

RUN service mysqld start && \
    sed -i "338s/AllowOverride None/AllowOverride All/" /etc/httpd/conf/httpd.conf && \
    echo "UPDATE mysql.user SET Password=PASSWORD('verylongandhard') WHERE User='root';DELETE FROM mysql.user WHERE User='';DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');DROP DATABASE test;DELETE FROM mysql.db WHERE Db='test' OR Db='test\\_%';FLUSH PRIVILEGES;" | mysql -u root
