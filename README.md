## Project Management Ticket System

### Description
This ticket system is a web application created using php and laravel served on an nginx server. Its purpose is to learn the laravel framework and 
create a CRUD application. The application allows the creation, updating, and deletion of tickets to track ToDos and project progress.

### Dependencies
This project is built using these technologies
* Php 7.4, php-fpm
* Composer
* Laravel 7
* Mysql
* Nginx

### How to run
Clone the repo and place in the `/var/www/` folder to run with nginx and start the service
```
sudo service nginx start
```
Otherwise clone the repo and run the command below to locally serve up the application
```
php artisan serve
```

Install the node dependencies required for the front end
```
npm install
```

Add database connection to the `.env` file.

Navigate to `localhost:PORT/ticket` where port is the port the application is running on. This brings up the list view of tickets

#### NOTE
Make sure your mysql server is running as well as php-fpm as these are required for the application.