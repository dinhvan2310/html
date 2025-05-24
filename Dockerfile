FROM php:8.1.28-apache

RUN apt-get update && apt-get upgrade -y && apt-get clean

# Cài đặt các extension PHP cần thiết (nếu có)
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable

# Copy toàn bộ mã nguồn vào thư mục gốc của Apache
COPY . /var/www/html/

# Phân quyền cho Apache
RUN chown -R www-data:www-data /var/www/html

# Mở port 80
EXPOSE 80

# Kích hoạt mod_rewrite nếu cần
RUN a2enmod rewrite

# Thiết lập thư mục làm việc
WORKDIR /var/www/html 