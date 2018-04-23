docker network create webnetwork
docker build --build-arg rsakeypass=bitbucket.pub --build-arg pergit="git@bitbucket.org:ShadowMad/test.git" -t code -f Dockerfile-code .
docker build -t pfpm -f Dockerfile-phpfpm .
docker build -t nginxy -f Dockerfile-nginx .

docker run -d --name code --network webnetwork code
docker run -d --name fpm --expose 9000 --volumes-from code --network webnetwork pfpm
docker run -d --name nginx  -p 80:8080 --volumes-from code --network webnetwork nginxy
