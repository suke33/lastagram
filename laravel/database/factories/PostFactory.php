<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
        return [
            'user_id' => User::factory()->has(Post::factory()->count(5)),
            'comment' => $this->faker->realText(200),
            'image' => 'images/testimage.png',
            // 'sort' => mt_rand(1, 5)
        ];
    }
}
