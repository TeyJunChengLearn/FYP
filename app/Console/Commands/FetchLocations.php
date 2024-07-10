<?php

namespace App\Console\Commands;

use App\Models\Location;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchLocations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-locations';

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
        $keyword1 = 'pet clinic';
        $keyword2 = 'animal rescue and shelter';

        $apiKey = "";
        $baseUrl = 'https://maps.googleapis.com/maps/api/place/textsearch/json';

        $locations = array_merge(
            $this->fetchLocations($baseUrl, $apiKey, $keyword1),
            // $this->fetchLocations($baseUrl, $apiKey, $keyword2)
        );

        foreach ($locations as $location) {
            if (!$this->locationExists($location['name'], $location['formatted_address'])) {
                Location::create([
                    'name' => $location['name'],
                    'address' => $location['formatted_address'],
                    'latitude' => $location['geometry']['location']['lat'],
                    'longitude' => $location['geometry']['location']['lng'],
                    'category'=>'pet clinic',
                ]);
            }
        }
        $locations = array_merge(
            // $this->fetchLocations($baseUrl, $apiKey, $keyword1),
            $this->fetchLocations($baseUrl, $apiKey, $keyword2)
        );

        foreach ($locations as $location) {
            if (!$this->locationExists($location['name'], $location['formatted_address'])) {
                Location::create([
                    'name' => $location['name'],
                    'address' => $location['formatted_address'],
                    'latitude' => $location['geometry']['location']['lat'],
                    'longitude' => $location['geometry']['location']['lng'],
                    'category'=>'animal rescue and shelter',
                ]);
            }
        }
        $this->info('Locations fetched and stored successfully.');
    }

    private function locationExists($name, $address)
    {
        return Location::where('name', $name)->where('address', $address)->exists();
    }

    private function fetchLocations($baseUrl, $apiKey, $keyword)
    {
        $allLocations = [];
        $location = 'Malaysia';
        $radius = 50000; // 50 km, adjust as needed
        $params = [
            'query' => $keyword,
            'location' => '4.2105,101.9758', // Approximate center of Malaysia
            'radius' => $radius,
            'key' => $apiKey,
        ];

        do {
            $response = Http::get($baseUrl, $params);
            $results = $response->json();
            $allLocations = array_merge($allLocations, $results['results']);

            if (isset($results['next_page_token'])) {
                $params['pagetoken'] = $results['next_page_token'];
                sleep(2); // Delay to avoid hitting rate limits
            } else {
                $params['pagetoken'] = null;
            }
        } while (!empty($params['pagetoken']));

        return $allLocations;
    }
}
