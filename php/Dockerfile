FROM php:8.3.9-fpm

#FROM php:7.4-fpm

# ติดตั้งส่วนขยายที่จำเป็น
RUN apt-get update && apt-get install -y libldap2-dev \
    && docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ \
    && docker-php-ext-install ldap \
    && docker-php-ext-install mysqli

# คัดลอกไฟล์ PHP ของคุณไปยังคอนเทนเนอร์
COPY . /var/www/html

# ตั้งค่าไดเรกทอรีทำงาน
WORKDIR /var/www/html
