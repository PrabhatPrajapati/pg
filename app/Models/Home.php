<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'homes';
    protected $fillable = ['title', 'description', 'featured_image'];

    /**
     * Get recent posts for home page
     */
    public function getRecentPosts()
    {
        return [
            [
                'id' => 1,
                'title' => 'Welcome to Our Platform',
                'description' => 'Get started with our amazing features and services.',
                'date' => now()->toDateString(),
            ],
            [
                'id' => 2,
                'title' => 'New Features Released',
                'description' => 'Explore the latest updates and improvements.',
                'date' => now()->subDay()->toDateString(),
            ],
            [
                'id' => 3,
                'title' => 'Community Highlights',
                'description' => 'See what our users are building and sharing.',
                'date' => now()->subDays(2)->toDateString(),
            ],
        ];
    }

    /**
     * Get total user count
     */
    public function getTotalUsers()
    {
        return \App\Models\User::count();
    }
}
