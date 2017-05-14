#!/bin/bash
# This short script will build and run the site. 
# You can even use it to "reset" your site by removing the old container
# before running a new instance.

docker kill xss-site && docker rm xss-site

docker build . --tag xss-site

docker run \
-d \
-p 80:80 \
--name xss-site \
xss-site