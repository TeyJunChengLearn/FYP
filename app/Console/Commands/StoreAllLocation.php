<?php

namespace App\Console\Commands;

use App\Models\Location;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class StoreAllLocation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:store-all-location';

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
        $locations=Location::all();

        $jsonData = $locations->toJson(JSON_PRETTY_PRINT);

        File::put(storage_path("app/test.json"), $jsonData);
    }
}
