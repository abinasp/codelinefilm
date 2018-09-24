## Codeline Films

It's an application, where you can see the list of films and can create your own film.

## Requirements

- `PHP v7.1+`
- `Composer`
- `Laravel`
- `MySql` Database(XAMPP would be best)

## Installation

- Install Laravel by using this command. `composer global require "laravel/installer"`.
- Clone this repository by using command `git clone`.
- Run `composer install`. It will install all the dependencies which is present in `composer.json` file. 
- Set up `.env` file by copying all the value from `.env.example` file.
- Configure `MySql` database in your `.env ` file.
- Run `php artisan migrate:refresh --seed`. It will create the database and will put some data in the database.
- Run `php artisan serve` in terminal.
- Open `localhost:8000` in the browser.

## Result

- In borowser it will show list of films.
- You can Register or Login by clicking register button in the header.
- To create film you have to login or register first.
- You can go to any particular film by clicking on there respective image or there name.
- In Film details page you will be able to see the Film details.
- At the end you can comment. To give comment you need to login.
- After giving comment, you can see your comment by refreshing the browser. 

## Need to fix
- While creating a film you can't upload photo, you need to give the photo URL.