<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publication>
 */
class PublicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Download $img_url ans save into public/images folder
        $img_url = 'https://picsum.photos/800/900?random='.rand(1, 100);
        $img_name = date('mdYHis') . uniqid() .'.jpg';
        $img_path = public_path('images/db/'.$img_name);
        file_put_contents($img_path, file_get_contents($img_url));

        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image_url' => 'images/db/' . $img_name,
            'user_id' => $this->faker->numberBetween(1, User::count()-1),
        ];
    }
}
