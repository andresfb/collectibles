<?php

namespace Database\Factories;

use App\Models\Collectible;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CollectibleFactory extends Factory
{
    protected $model = Collectible::class;

    public function definition(): array
    {
        return [
            'type_id' => $this->faker->randomNumber(),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'release_year' => $this->faker->randomNumber(),
            'condition' => $this->faker->word(),
            'price' => $this->faker->randomNumber(),
            'purchase_date' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
