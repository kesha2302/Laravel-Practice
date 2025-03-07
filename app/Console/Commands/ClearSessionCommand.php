<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ClearSessionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clearsession';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clearing Session Data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Session::forget('custompackage');
        Log::info('Clearing custompackage data ');
        $this->info('Custom package session data has been clear');
    }
}
