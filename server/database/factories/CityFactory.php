<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\City>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = City::class;

    public function definition(): array
    {
        $country = Country::select('id')->get()->toArray();

        return [
            'name' => $this->faker->city(),
            'tel_number' => $this->faker->e164PhoneNumber(),
            'country_id' => $this->faker->randomElement($country[4])
        ];
    }
}
