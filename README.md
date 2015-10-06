Hackbase
========
This was a hacking/wargame contest I had organised in my college. 13 levels of quite basic challenges.

How to play
-----------
The actual contest had 4 servers running. Because of the interdependencies and a specific initialization sequence, I've dockerized the setup.

* Make sure docker is installed and the service is running.
* execute `play.sh` to start the servers. 4 servers will be started one by one. Press CTRL+P+Q to detach each in turn and proceed.
* Link to starting web page will be generated at the end of servers initialization.
* Open the webpage and register with a username and password. Login and play!

General advice:
* Try not to use the setup information, eg number of servers. Don't peek into the solutions. It will be more satisfying when you solve it on your own.
* All levels have the appropriate hints. Look in all places. Read the rules carefully on the webapp.

Domain knowledge used: PHP, MySQL, port scanning, HTML and web apps, ciphers, etc

Have fun!

Note: this will download docker image binaries from the registry. Alternatively, you can build the Dockerfiles yourself.

Feedback
--------
Don't judge this too harshly. I completed it within a self imposed time constraint and motivation which comes from [last minute panic](http://www.gocomics.com/calvinandhobbes/2012/05/24). At the same time, I feel it ended up being quite good :)

For any improvements or comments, lets [discuss in Issues](https://github.com/siddharthasahu/hackbase/issues).

License
-------
All code is licensed under [GNU GPLv3](https://www.gnu.org/licenses/gpl-3.0.en.html).  
All creative content is licensed under [Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License](https://creativecommons.org/licenses/by-nc-sa/4.0/).