<?php
for pem:
scp -r -i "<path_of_key.pem_file" "<path_of_folder_to_copy>" ubuntu@3.87.198.23:/home/ubuntu/

for ppk:
pscp -r -i "path_of_key.ppk_file" "<path_of_folder_to_copy>" ubuntu@3.87.198.23:/home/ubuntu/

sudo apt-get update -y
sudo apt-get install apache2 -y
git clone https://github.com/Training-Demo/AWS-Project-1.git
cd AWS-Project-1
sudo mv * /var/www/html
cd /var/www/html
sudo rm index.html


sudo add-apt-repository -y ppa:ondrej/php
sudo apt install php5.6 mysql-client php5.6-mysqli -y

mysql -h <rds-endpoint> -u <username> -p

create database intel;
use intel;
create table data (firstname varchar(20), email varchar(25);
seslect * from data;


mysql -h ##endpoint## -u ##master-username-eg:admin## -p
create database intel;
show databases;
use intel;
create table task1(firstname varchar(20),email varchar(20));

select * from data;
?>