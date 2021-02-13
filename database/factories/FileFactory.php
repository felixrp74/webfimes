<?php

namespace Database\Factories;

use App\Models\File;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'url' => 'posts/' . $this->faker->image('public/storage/posts', 640, 480,null, false)
            'url' => 'files/' . $this->faker->image('public/storage/files', 640, 480,null, false)
        ];
    }
}
