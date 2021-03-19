#SMCI_SchoolERP

System Requirements:

PHP 5.4 or higher and Mysql 5.1 or higher. We have tested on Windows and Linux.

Below are a list of items you should ensure to comply with.

1. PHP 5.6+
2. MYSQL 5.1+
3. MYSQL SQL_MODE must not contain ONLY_FULL_GROUP_BY
4. mod_rewrite Apache
5. MBString Extension
6. MYSQLi Extension
7. fileinfo Extension
8. Zip Extension
9. CURL Extension (recommended)
10.PHP max_execution_time should be atleast 60 seconds for smoother installation

* In most hosting accounts, these extensions are enabled by default.

You must make few directories/files writeable. Below are a list of directories/files you should ensure that have write permissions.

installation_dir/application/config/config.php
installation_dir/application/config/database.php
installation_dir/application/config/autoload.php
installation_dir/application/config/license.php
installation_dir/temp
installation_dir/backup
installation_dir/backup/database_backup
installation_dir/backup/temp_uploaded
installation_dir/uploads
installation_dir/uploads/<all_its_sub_directories>

Installation :

- Configure database connection

Create database first.
Create user and setup your password.
Add the user to database by selecting the database and the username.
Make sure you have checked All privileged when adding the user to database.

- Install

After hitting url http://domain.com/ system redirects to http://domain.com/install/start to start installer.
You will need to pass the server requirements in order to install.
Click Database Setup and populate the fields according to your database setup.
If any errors found while connecting you will be notified otherwise you should see the credentials screen.
Enter Admin Email and Password for your Admin Panel Login.

After successful installation you need to setup few things about your school.

Admin login : http://domain/site/login
User login : http://domain/site/userlogin (Default)