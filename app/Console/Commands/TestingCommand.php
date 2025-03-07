<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:run {name} {--greeting=Hello}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testing Custom Command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argumemt('name');
        $greeting = $this->option('greeting');

        $this->info("$greeting, $name");
        // $this->info('Testing Command executed successfully');
    }
}
