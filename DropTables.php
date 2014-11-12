<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class DropTables extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'drop:tables';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Drop pre-determined tables from the database.';
    
    protected $tables = [
        'assigned_roles',
        'password_reminders',
        'permission_role',
        'permissions',
        'roles',
        'users',
    ];

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
        if ($this->confirm('Are you sure? [yes|no]'))
        {
        
            $this->info('Attempting to drop tables...');
            
            DB::unprepared('set foreign_key_checks = 0');
            
            foreach ($this->tables as $table)
            {
                
                if (Schema::hasTable($table))
                {
                    
                    Schema::drop($table);

                    $this->info('Dropped: ' . $table);
                
                } else {
                
                    $this->error('Error dropping: ' . $table);
                    
                }
                

            }
            
            DB::unprepared('set foreign_key_checks = 1');
            
        }
        else
        {
            $this->info('Operation aborted.');
        }
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
        
        return array();
        
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
    
        return array();
        
	}

}
