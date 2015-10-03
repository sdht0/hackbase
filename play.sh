#!/bin/bash

set -e

sudo docker run -ti -h test.internal --name hackbase_server_3 sdht/hackbase:server_3
sudo docker run -ti -h test.internal --name hackbase_server_2 --link hackbase_server_3:server3 sdht/hackbase:server_2
sudo docker run -ti -h test.internal --name hackbase_server_1 --link hackbase_server_2:server2 sdht/hackbase:server_1
sudo docker run -ti -h test.internal --name hackbase --link hackbase_server_1:server1 --link hackbase_server_2:server2 --link hackbase_server_3:server3 sdht/hackbase
