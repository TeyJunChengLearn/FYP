<?php

namespace App\Console\Commands;

use App\Models\PetOwner;
use Illuminate\Console\Command;

class Testcode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:testcode';

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
        $user=PetOwner::where('id', '=',1)->first();
        if(!empty($user->animalrescuersandshelters)){
            echo 'this is admin';
        }else{
            echo "this is not admin";
        }
    }
}
