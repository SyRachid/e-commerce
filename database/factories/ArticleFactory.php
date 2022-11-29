<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function(Faker $faker){
    return[
        'titre'->$faker->sentence(7, true),
    ];
});
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
        ];
    }
}
