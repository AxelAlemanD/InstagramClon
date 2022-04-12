<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $firstName = $this->faker->firstName();
        $lastName = $this->faker->lastName();

        // Download $img_url ans save into public/images folder
        $img_url = 'https://picsum.photos/200/300?random='.rand(1, 100);
        $img_name = date('mdYHis') . uniqid() .'.jpg';
        $img_path = public_path('images/'.$img_name);
        file_put_contents($img_path, file_get_contents($img_url));

        return [
            'username' => $firstName.' '.$lastName,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'image_url' => 'images/' . $img_name,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
