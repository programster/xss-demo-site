#!/bin/bash
service php7.0-fpm start
service nginx start

# Use the cron service to tie up the foreground process
/usr/sbin/cron -f