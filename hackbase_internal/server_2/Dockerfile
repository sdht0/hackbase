from sdht/hackbase_internal:common
MAINTAINER sdht

RUN yum -y install vsftpd && \
    rm -rf /var/ftp/pub && \
    echo "Will you remain a noob, or will you surpass yourself... that is the question" > /opt/banner && \
    useradd -panonymous -m noobpk && \
    useradd -pdskjiuh67sdsa -m eyeofsauron && \
    echo "There may have been others" > /home/noobpk/.bash_history && \
    printf "ls\nls -la\nmap *\nping [SERVER]\n" > /home/eyeofsauron/.bash_history && \
    chown root:root /home/noobpk/.* && \
    chown root:root /home/eyeofsauron/.* && \
    chmod -w /home/noobpk && \
    chmod -w /home/eyeofsauron

ADD vsftpd.conf /etc/vsftpd/
ADD allfiles /home/noobpk/
ADD sshd_config /etc/ssh/
ADD usernames /var/ftp/
ADD history.sh /etc/profile.d/
ADD start.sh ports.py /root/

RUN chmod 755 /root/start.sh

CMD bash /root/start.sh
