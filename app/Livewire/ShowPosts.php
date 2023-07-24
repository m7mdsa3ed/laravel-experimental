<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class ShowPosts extends Component
{
    public function render(): View
    {
        $posts = $this->getPosts();

        return view('livewire.show-posts', [
            'posts' => $posts,
        ]);
    }

    private function getPosts(): array
    {
        $faker = \Faker\Factory::create();

        $posts = [];

        for ($i = 0; $i < 10; $i++) {
            $posts[] = [
                'id' => $i,
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ];
        }

        return $posts;
    }
}
