php artisan drop:tables
=======================

Artisan Command for Laravel 4.2 that drops pre-determined tables. This will solve the problem of foreign key constraint problems when deleting tables with foreign keys.


#Steps

1. Copy app/commands/DropTables.php to your project app/commands directory.

2. Add this line to your app/start/artisan.php:

    Artisan::add(new DropTables);


3. Edit DropTables.php and change the $tables array with your database table names.

    protected $tables = [
        'aliases',
        'assigned_roles',
        'channel_genre',
        'channels',
        'freeviews',
        'genres',
        'locations',
        'migrations',
        'package_channel',
        'packages',
        'pages',
        'password_reminders',
        'payperviews',
        'permission_role',
        'permissions',
        'presses',
        'promo_location',
        'promos',
        'roles',
        'schedules',
        'sessions',
        'user_accounts',
        'user_details',
        'users',
        'widgets',    
    ];

4. Save changes to DropTables.php

5. Run the artisan command:

    php artisan drop:tables
    
    