<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Like;
use App\Models\Publication;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (User::all() as $user) {
            // Get random subarray of publications,
            // This is necessary to make sure that there are not double entries
            // That is a user should not be able to like a publication twice
            $publications = Publication::inRandomOrder()
                ->take(rand(1, 5))
                ->get();
            foreach($publications as $publication) {
                Like::factory()->create([
                    'user_id' => $user->id,
                    'publication_id' => $publication->id,
                ]);
            }
        }
    }
}
