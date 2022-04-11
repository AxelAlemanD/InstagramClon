<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FollowerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user_id = $this->faker->numberBetween(1, User::count());
        // Remove user_id from the list of attributes
        $candidates = array_diff(range(1, User::count()-1), [$user_id]);
        $follower_id = $this->faker->randomElement($candidates);
        return [
            'user_id' => $user_id,
            'follower_id' => $follower_id,
        ];
    }
}
