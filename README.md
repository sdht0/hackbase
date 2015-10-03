Hackbase
========
This was a hacking/wargame contest I had organised in my college. 13 levels of quite basic challenges.

How to play
-----------
This needs a 4 server setup. Because of the interdependencies and a specific initialization sequence, I've dockerized all of them. 

* Make sure docker is setup and the service is running.
* execute `play.sh` to start the servers.
* 4 servers will be started and setup one by one. Press CTRL+P+Q to detach each in turn and proceed.
* Link to starting web page will be generated at the end of servers initialization.
* Open the webpage and register with a name and password.

Have fun!

Note that this will download docker binaries from the registry. Alternatively, you can build the Dockerfiles yourself.

Feedback
--------
Don't judge this too harshly. I completed it within a self imposed time constraint and motivation which comes from last minute panic.

For any improvements or comments, lets discuss in the Issues page.