<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsArticles>
 */
class NewsArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(3, true),
            'article_image' => $this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['approved' ,'disapproved', ]),
            'slug' => $this->faker->slug(3),
            'user_id' => rand(1,7),
            'subcategory_id' => rand(1 , 5),
        ];
    }
}
