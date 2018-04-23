FROM debian

RUN apt-get -y update &&\
	apt-get -y upgrade &&\
	apt-get -y install build-essential git golang-go sqlite libsqlite3-dev openssl openssh-server &&\
	export GOPATH=/root/go &&\
	mkdir -p $GOPATH/src/github.com/gogits &&\
	cd $GOPATH/src/github.com/gogits &&\
	git clone --depth=1 -b develop https://github.com/gogits/gogs &&\
	cd gogs &&\
	go build -tags 'sqlite'

ENV USER="root"
WORKDIR /root/go/src/github.com/gogits/gogs
EXPOSE 3000 22
USER root
CMD ["./gogs", "web"]