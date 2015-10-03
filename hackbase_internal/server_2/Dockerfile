from sdht/hackbase_internal:common
MAINTAINER sdht

RUN yum -y install vsftpd openssh-server && \
    rm -rf /var/ftp/pub && \
    echo "Will you remain a noob, or will you surpass yourself... that is the question" > /opt/banner && \
    useradd -p $(openssl passwd -1 anonymous) -m noobpk && \
    useradd -pdskjiuh67sdsa -m eyeofmauron && \
    echo "There may have been others" > /home/noobpk/.bash_history && \
    chown root:root /home/noobpk/.b* && \
    chown root:root /home/eyeofmauron/.b* && \
    chmod -w /home/noobpk && \
    chmod -w /home/eyeofmauron

ADD vsftpd.conf /etc/vsftpd/
ADD allfiles /home/noobpk/
ADD sshd_config /etc/ssh/
ADD usernames /var/ftp/
ADD history.sh /etc/profile.d/
ADD start.sh ports.py /root/

RUN chmod 755 /root/start.sh

CMD bash /root/start.sh
