<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => $this->faker->slug,
            'title' => $this->faker->sentence,
            "excerpt"=>'<p>'.implode('</p><p>',$this->faker->paragraphs(2)).'</p>',
            "body"=>'<p>'.implode('</p><p>',$this->faker->paragraphs(6)).'</p>',
            "published_at"=>$this->faker->dateTimeBetween('-1 week','+1 week')
        ];
    }
}
