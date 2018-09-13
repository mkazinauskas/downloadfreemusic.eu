#!/usr/bin/env bash

docker kill downloadfreemusic.eu
docker rm downloadfreemusic.eu
docker rmi downloadfreemusic.eu
docker build -t downloadfreemusic.eu .
docker run -p 5001:80 --mount type=bind,source="$(pwd)"/html,target=/web/html,readonly -d --name downloadfreemusic.eu downloadfreemusic.eu
#docker save downloadfreemusic.eu > downloadfreemusic.eu.tar
