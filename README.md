# College exams management system

---

![backend_01](https://i.postimg.cc/jSrnqrHp/Screenshot-3.png "Backend")
![backend_02](https://i.postimg.cc/9F9qjf7P/Screenshot-2.png "Backend")
![frontend](https://i.postimg.cc/KcwgVTRv/Screenshot-1.png "Frontend")

## Description
Backend and Frontend for exams management. This project has the following features:

1. User roles: guests and registered users.
2. Mail notifications
3. Backend:  Forms and views for exams management (registered users).
4. Frontend: Forms and views for data query (guests and registered users).

## Setup

### Requirements:
This project was developed using Laravel Homestead Vagrant box:

- Composer
- Laravel
- MySQL
- PHP

### Installation:

1. Clone this repo running command `git clone https://mariano_chiqueta@bitbucket.org/mariano_chiqueta/trabajo-final.git` on a terminal.

Navigate to the project folder and follow the following steps:

2. Execute command `composer install` to install dependencies of the project.

3. Copy the content of the .env.example file to .env and edit the database and mail server configuration with your own parameters.

4. Run the command `php artisan key:generate`

5. Execute the command `php artisan migrate --seed` in order to generate the tables for your database and generate test data for it.

6. Start the server running `php artisan serve`. Enter the URL application from your browser.
