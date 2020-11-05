<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => rtrim($this->faker->sentence(mt_rand(5, 10)), "."),
            'body' => $this->faker->paragraphs(mt_rand(3, 7), true),
            'views' => mt_rand(0, 10),
            'answers' => mt_rand(0, 10),
            'votes' => mt_rand(-3, 10),
        ];
    }
}
