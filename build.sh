#!/bin/bash
PASSWORD=rebaca
TAG=latest
echo "[*] Downloading sql dump files"
if [ ! -f load_employees.dump ]; then
  wget -q https://github.com/datacharmer/test_db/raw/master/load_employees.dump
fi
if [ ! -f employees.sql ]; then
  wget -q https://raw.githubusercontent.com/datacharmer/test_db/master/employees.sql
fi
echo "[*] Running Docker Container"
docker_id=`sudo docker run -it -d -e MYSQL_ROOT_PASSWORD=$PASSWORD mysql:5.7`
sleep 10
echo "[*] Injecting Database tables"
docker exec -i $docker_id mysql -uroot -p$PASSWORD < employees.sql
docker exec -i $docker_id mysql -uroot -p$PASSWORD employees < load_employees.dump
echo "[*] Commiting the Docker Container: $docker_id"
sudo docker commit $docker_id veerendrav2/mysql:$TAG
echo "[*] Pushing veerendrav2/mysql:$TAG"
sudo docker push veerendrav2/mysql:$TAG
docker rm -f $docker_id
