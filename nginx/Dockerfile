from nginx:1.15.6

RUN apt-get update -y && apt-get install -y curl
RUN rm -f /etc/nginx/conf.d/default.conf
COPY rabbit-mail.conf /etc/nginx/conf.d/rabbit-mail.conf
