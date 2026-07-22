FROM nginx:stable-alpine3.24-perl

COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./launch.sh /launch.sh
COPY ./data /data

WORKDIR /etc/nginx
