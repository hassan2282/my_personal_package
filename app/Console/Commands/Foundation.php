<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class Foundation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'foundation:make {name} {--all}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate name';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = Str::studly($this->argument('name'));

        if ($this->option('all')) {

            $this->call('make:model', ['name' => $name],);
            $this->call('make:controller', ['name' => $name . 'Controller'],);
            $this->call('make:migration', ['name' => $name],);
            $this->call('make:factory', ['name' => $name],);
            $this->call('make:seeder', ['name' => $name],);
            $this->call('make:migration', ['name' => 'Create' . '_' . Str::plural($name) . '_' . 'table']);
        }

        $this->info("Foundation for {$name} has been generated successfully!");
    }

}
