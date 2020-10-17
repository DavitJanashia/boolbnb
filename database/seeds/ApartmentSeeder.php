<?php

use Illuminate\Database\Seeder;
use App\Apartment;
use App\User;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Apartment::class, 100)
      -> make()
      -> each(function($apart){
        $user = User::inRandomOrder() -> first();
        $apart -> user() -> associate($user);
        $apart -> save();
      });
    }
}
