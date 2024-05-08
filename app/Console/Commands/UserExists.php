<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UserExists extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:exists {value} {column=email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $value = $this->argument('value');
//      $column = $this->argument('column') ?? 'email';
        $column = $this->argument('column');
//        $password = $this->ask('Enter password');
        $password = $this->secret('Enter password');

        $emailExists = User::where($column, $value)->exists();

        if ($emailExists) {
            echo "User Already exists";
        } else {
            echo "User does not exist";
        }
    }
}
