<?php

namespace App\Console\Commands;

use App\Models\Admin;
use App\Models\PetOwner;
use App\Models\ForumCategory;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\AnimalRescuerAndShelter;

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
        PetOwner::create([
            'firstname'=>'Tey',
            'lastname'=>'Jun Cheng',
            'email'=>'elson2002@gmail.com',
            'password'=>Hash::make('Teyjuncheng1212'),
        ]);
        PetOwner::create([
            'firstname'=>'Tey',
            'lastname'=>'Jun Cheng',
            'email'=>'junelson2002@gmail.com',
            'password'=>Hash::make('Teyjuncheng1212'),
        ]);
        PetOwner::create([
            'firstname'=>'Tey',
            'lastname'=>'Jun Cheng',
            'email'=>'cheng2002@gmail.com',
            'password'=>Hash::make('Teyjuncheng1212'),
        ]);
        Admin::create([
            'petowner_id'=>1
        ]);
        AnimalRescuerAndShelter::create([
            'name'=>'cheng cheng',
            'structure'=>1,
            'location'=>'cyberjaya',
            'phonenumber'=>'0172935594',
            'taxidentificationnumber'=>'012345',
            'businesslicense'=>'012345',
            'description'=>"this is from cheng cheng",
            'petowner_id'=>2,
        ]);
        ForumCategory::create([
            'name'=>'Dog',
            'admin_id'=>1
        ]);
        ForumCategory::create([
            'name'=>'Cat',
            'admin_id'=>1
        ]);
        ForumCategory::create([
            'name'=>'Bird',
            'admin_id'=>1
        ]);
        ForumCategory::create([
            'name'=>'Fish',
            'admin_id'=>1
        ]);
        ForumCategory::create([
            'name'=>'Reptiles',
            'admin_id'=>1
        ]);
        ForumCategory::create([
            'name'=>'Rodents',
            'admin_id'=>1
        ]);
        ForumCategory::create([
            'name'=>'Insects',
            'admin_id'=>1
        ]);
    }
}
