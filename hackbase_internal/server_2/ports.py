#!/usr/bin/env python2

import thread
import socket

def listenClients(serverSoc):
    while 1:
      clientsoc, clientaddr = serverSoc.accept()
      print ("Client connected from %s:%s" % clientaddr)
    serverSoc.close()

ip="192.168.102.163"
port=[8000,8080,8888,9000,9025]

for i in port:
    try:
        serveraddr=(ip,i)
        serverSoc = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
        serverSoc.bind(serveraddr)
        serverSoc.listen(5)
        print ("Server listening on %s:%s" % serveraddr)
        thread.start_new_thread(listenClients,(serverSoc,))
    except Exception,e:
        print ("Error setting up server",e)


import time
while 1:
    time.sleep(120)
