DropTables
==========

Artisan Command for Laravel 4.2 that drops pre-determined tables. Solves the problem of foreign key constraint problems when deleting tables with foreign keys.

1. Copy app/commands/DropTables.php to your project app/commands directory.

2. Add this line to your app/start/artisan.php:

    Artisan::add(new DropTables);




