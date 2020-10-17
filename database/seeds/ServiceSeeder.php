<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Service::class, 5) -> each(function(){
        //
        // });

        DB::table('services')->insert(array(
          array(
            'service' => 'wifi'
          ),
          array(
            'service' => 'parking'
          ),
          array(
            'service' => 'sauna'
          ),
          array(
            'service' => 'sea_view'
          ),
          array(
            'service' => 'pool'
          ),
          array(
            'service' => 'reception'
          )
        ));


    }
}
