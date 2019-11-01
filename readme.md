<p align="center"><img src="logo_laravel_voyager.png" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Voyager

Voyager is a Laravel Admin Package that includes BREAD(CRUD) operations, a media manager, menu builder, and much more.

## ✨ Demo

```
http://www.startbootstrap.oubihis.com/admin
Email: user@user.com
Password: password

```

## Installation 🚀


```sh

# clone the project repo to your local machine

git clone https://github.com/oubihis/Start-Bootstrap.git

# cd'ing to project directory

cd Start-Bootstrap

# make sur you have .env file
# if not rename .env.example file to .env by executing this command
# or just make in terminal

cp .env.example .env

# generate the app key (if not already generated)

php artisan key:generate

# fill database credentials
# feel free to adapt to your needs

DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

# install dependencies

composer install

# then

# seed database
php artisan migrate:fresh --seed

# create a new admin user
php artisan voyager:admin your@email.com --create

# dont forget change APP_URL variable inside the .env file
APP_URL=localhost:8000

# local development server
# this command will start a development server at http://localhost:8000:

php artisan serve

```
## Code Style

Here you'll find the [best practices](https://github.com/alexeymezenin/laravel-best-practices) and [naming conventions](https://github.com/alexeymezenin/laravel-best-practices#follow-laravel-naming-conventions) for laravel project.

## :ghost: About design
**Description** : 
Clean blog is a carefully styled Bootstrap blog theme that is perfect for personal or company blogs. This theme features four HTML pages including a blog index, an about page, a sample post, and a contact page.
[ View on GitHub](https://github.com/BlackrockDigital/startbootstrap-clean-blog).


## 💻 Support
[Open Issue](https://github.com/oubihis/Start-Bootstrap/issues/new).

## 🤝 Contributing
Please contribute using [Github Flow](https://guides.github.com/introduction/flow/). Create a branch, add commits, and [open a pull request](https://github.com/oubihis/Start-Bootstrap/compare/).

## Big thanks ❤️ ❤️ ❤️
👤 **Mohamed IDBRAHIM**
- Github: [@IDBRAHIMDEV](https://github.com/IDBRAHIMDEV)
- Watch: [laravel voyager tutorial](https://www.youtube.com/watch?v=WXcYhYqoAog&list=PLNAMnK22kwLZNP9Nqrgr-3vklMuLnDIth)


## 📝 License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
"# Start-Bootstrap" 
