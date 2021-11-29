<?php

namespace Database\Factories\Content;

use App\Models\Content\Article;
use App\Models\Content\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::inRandomOrder()->first(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentences($nb = 3, $asText = true),
            'content' => $this->faker->paragraphs($nb = 3, $asText = true),
        ];
    }
}
