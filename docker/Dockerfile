FROM 127.0.0.1:5000/nginxphp:1.0

MAINTAINER Xiang Zhang "soarfreely.z@gmail.com"

COPY src /var/www/html
COPY docker/nginx-conf/nginx.conf /etc/nginx
COPY docker/nginx-conf/site.conf /etc/nginx/sites-enabled/default.conf
COPY docker/fpm-conf/www.conf /usr/local/etc/php-fpm.d/

# 设置时区
RUN ln -sf /usr/share/zoneinfo/Asia/Shanghai /etc/localtime
RUN echo 'Asia/Shanghai' >/etc/timezone

