FROM php:8.2-fpm

# ติดตั้ง package ที่จำเป็น
RUN apt-get update && apt-get install -y \
    libpq-dev \
    build-essential \
    zip unzip curl git \
    libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd 

# สร้าง user และ group ชื่อ www (ใช้ id เดียวกับ www-data)
# RUN groupadd -g 1000 www
# RUN useradd -u 1000 -ms /bin/bash -g www www

# ตั้ง Working Directory
WORKDIR /var/www

# ตั้ง owner ให้ www:www
# (ตอน mount volume ภายหลัง Laravel จะไม่งอแง)
# RUN chown -R www:www /var/www

# เปลี่ยนมาใช้ user www
# USER www

# PHP-FPM ใน container จะรันด้วย user ปลอดภัย
