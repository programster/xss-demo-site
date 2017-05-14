FROM ubuntu:16.04

RUN apt-get update && apt-get dist-upgrade -y
RUN apt-get install nginx php-fpm cron -y

COPY startup.sh /root/startup.sh

RUN rm /var/www/html/*
COPY nginx.conf /etc/nginx/sites-enabled/default
COPY public_html/* /var/www/html/
RUN chmod 777 /var/www/html/comments.json


# Use the cron service to keep the container running.
CMD ["/bin/bash", "/root/startup.sh"]