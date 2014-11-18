Drop Tables: Artisan Command for Laravel 4.2
============================================


    php artisan drop:tables
    


Artisan Command for Laravel 4.2 that drops pre-determined tables. This solves foreign key constraint problems when deleting tables with foreign keys.

Practical use of this is after migrating and seeding. Along with several updates, you want to drop the tables, with and without foreign keys, so you can freshly migrate and seed again.




## Steps

1. Copy `DropTables.php` to your project directory:

    app/commands/DropTables.php


2. Add this line to your `app/start/artisan.php`:

    Artisan::add(new DropTables);


3. Edit `app/commands/DropTables.php` and change the `$tables` array with the names of your database tables you want dropped.

    protected $tables = [
        'assigned_roles',
        'password_reminders',
        'permission_role',
        'permissions',
        'roles',
        'users',
    ];


4. Run the artisan command:

    php artisan drop:tables



    
## Disclaimer

This is not intended for production use as this will deliberately drop tables with or without data.




## Author

[Jon Discipulo](http://jondiscipulo.com/)


