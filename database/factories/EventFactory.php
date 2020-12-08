<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image = $this->faker->image();
        $imageFile = new File($image);

        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'city' => $this->faker->city,
            'private' => $this->faker->boolean(2),
            'image' => $this->faker->image('storage/app/public',400,300),
            //'items' => $this->faker->paragraph,
            'date' => $this->faker->date,
            'user_id' => User::factory(),
            'price' => $this->faker->randomDigit,
        ];
    }
}
