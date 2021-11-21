FROM php:7.2-apache
RUN docker-php-ext-install mysqli

# #config
# copy ./nginx.conf /etc/nginx/nginx.conf

# #content, comment out the ones you dont need!
# copy ./*.html /usr/share/nginx/html/
# #copy ./*.css /usr/share/nginx/html/
# #copy ./*.png /usr/share/nginx/html/
# #copy ./*.js /usr/share/nginx/html/