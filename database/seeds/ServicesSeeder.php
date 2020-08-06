<?php

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        for($i=0;$i<20;$i++){
            Service::Create([
                'name'=>$faker->name,
                'description'=>$faker->text(50),
                'slug'=>$faker->unique()->slug,
                'invisible'=>rand(0,1)
            ]);
        }
    }
}
