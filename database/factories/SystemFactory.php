<?php

namespace Database\Factories;

use App\Models\System;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SystemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = System::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::random(10),
            'user_id' => rand(1,10),
        ];
    }
}
