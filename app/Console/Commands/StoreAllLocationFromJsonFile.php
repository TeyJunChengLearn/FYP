<?php

namespace App\Console\Commands;

use App\Models\Location;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class StoreAllLocationFromJsonFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:store-all-location-from-json-file';

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
        $locations=json_decode(File::get(storage_path("app/test.json")),true);
        foreach($locations as $location){
            Location::create([
                'name' => $location['name'],
                'address' => $location['address'],
                'latitude' => $location['latitude'],
                'longitude' => $location['longitude'],
                'category'=>$location['category'],
            ]);
        }
    }
}
