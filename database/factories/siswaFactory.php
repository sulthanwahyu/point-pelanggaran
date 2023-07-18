<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Faker\Factory as faker ;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class siswaFactory extends Factory
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
                'nisn'=> $faker->randomNumber(8, true),
                'jeniskelamin'=>$faker->randomElement(['Pria','Wanita']),
                'alamat'=>  $faker->address(),
                'nohp'=> $faker->phoneNumber(),
                'email'=> $faker->email(),
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
                'kelas_id'=> Arr::random([1,2,3]),
                'jurusan_id'=> Arr::random([1,2,3,4,5]),

            ];       
    }
}