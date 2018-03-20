FROM debian
ENV TS3SERVER_LICENSE=accept
RUN apt-get update -y &&\
	apt-get upgrade -y &&\
	apt-get install -y wget bzip2 &&\
	wget http://dl.4players.de/ts/releases/3.1.1/teamspeak3-server_linux_amd64-3.1.1.tar.bz2 &&\
	tar xfvj teamspeak3-server_linux_amd64-3.1.1.tar.bz2 &&\
	mv teamspeak3-server_linux_amd64 teamspeak-server &&\
	cd teamspeak-server &&\
	chmod 775 ts3server_startscript.sh
EXPOSE 9987 9987/udp
CMD ["sh", "teamspeak-server/ts3server_minimal_runscript.sh"]