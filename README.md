# raspberry arch xclear-db 
simple mysql php database


Requisitos
php mysql

install
pacman -S php

Install and Configure MySQL

By default, Arch Linux provides MariaDB as a relational database solution. MariaDB is an open source drop-in replacement for MySQL, and all system commands that reference mysql are compatible with it.

    Install the mariadb, mariadb-clients and libmariadbclient packages:

    sudo pacman -Syu mariadb mariadb-clients libmariadbclient

    Install the MariaDB data directory:


    sudo mysql_install_db --user=mysql --basedir=/usr --datadir=/var/lib/mysql

    Start MySQL and set it to run at boot

    	

    sudo systemctl start mysqld.service
    sudo systemctl enable mysqld.service

    Run mysql_secure_installation, a program that helps secure MySQL. mysql_secure_installation gives you the option to set your root password, disable root logins from outside localhost, remove anonymous user accounts, remove the test database and then reload the privilege tables:
mysql>>
  CREATE DATABASE biblioteca;
  connect biblioteca
  CREATE TABLE folha (id int NOT NULL AUTO_INCREMENT,titulo TEXT,descri TEXT,texto TEXT,url TEXT, PRIMARY KEY (id),UNIQUE id (id));

    	

    mysql_secure_installation
