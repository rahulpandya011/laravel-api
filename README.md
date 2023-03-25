**PHP(8.1) for Project Basic Setup**

**Clone bitbucket**

    git clone https://github.com/rahulpandya011/laravel-api.git

**Install Laravel dependency using below commands**

    composer install

**Copy .env.example to .env file and update .env file with your configuration values**

    sudo cp .env.example .env

**Migrate and seed database with tablses and predefined data**

    php artisan migrate:fresh --seed

**Generate symlink and Key using below commands**

    php artisan key:generate

**In Terminal run below command for run project for Development Only**

**Laravel :** `php artisan serve`
