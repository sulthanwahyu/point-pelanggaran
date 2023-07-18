<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Faker\Factory as faker ;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class guruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        $faker = faker::create();
        return [
            'nama'=> $faker->name(),
            'nipd'=> $faker->randomNumber(8, true),
            'alamat'=> $faker->address(),
            'nohp'=> $faker->phoneNumber()    ,
            'email'=> $faker->email(),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
            'kelas_id'=> Arr::random([1,2,3]),
        ];
    
    }
}
