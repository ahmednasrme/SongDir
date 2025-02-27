<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique(true)->catchPhrase(),
            'artist' => $this->faker->name(),
            'metadata'=> json_encode([
                'year' => $this->faker->numberBetween(1990,2020),
                'cover' => '',
                'gener' => 'pop'
            ])
        ];
    }
}
