<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DefaultDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:default-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'when rollback and migrate the database start this command to store all the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
