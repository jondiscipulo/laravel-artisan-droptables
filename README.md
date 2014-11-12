php artisan drop:tables
=======================

Artisan Command for Laravel 4.2 that drops pre-determined tables. This solves foreign key constraint problems when deleting tables with foreign keys.


## Steps

Copy app/commands/DropTables.php to your project app/commands directory.

Add this line to your app/start/artisan.php:

    Artisan::add(new DropTables);


Edit DropTables.php and change the $tables array with your database table names.

    protected $tables = [
        'assigned_roles',
        'channel_genre',
        'channels',
        'genres',
        'migrations',
        'package_channel',
        'packages',
        'password_reminders',
        'permission_role',
        'permissions',
        'presses',
        'promo_location',
        'promos',
        'roles',
        'user_accounts',
        'user_details',
        'users',
    ];


Run the artisan command:

    php artisan drop:tables
    
    
Enjoy!


## Disclaimer

This is not intended for production use as this will literally drop tables with or without data.


## Author

[Jonathan Discipulo](http://jondiscipulo.com/)


