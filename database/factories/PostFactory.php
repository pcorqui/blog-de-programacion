<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //las Keys son los nombres de la columnas en la base de datos
        return [
            'user_id' => 1,
            'title'   => $this->faker->sentence,
            'body'    => $this->faker->text(800),
        ];
    }
}
