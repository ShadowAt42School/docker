FROM ruby
RUN apt-get -y update &&\
	apt-get -y upgrade &&\
	apt-get install -y build-essential nodejs &&\
	gem install rails

ONBUILD COPY app/ /opt/
ONBUILD WORKDIR /opt/app/
ONBUILD RUN bundle install
ONBUILD RUN rails db:migrate
ONBUILD RUN rails db:seed