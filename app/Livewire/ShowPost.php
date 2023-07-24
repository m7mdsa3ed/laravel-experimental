<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class ShowPost extends Component
{
    public array $post;

    public function mount($id)
    {
        $faker = \Faker\Factory::create();

        $this->post = [
            'id' => $id,
            'title' => $faker->sentence,
            'body' => $faker->paragraphs(5, true),
            'thumbnail' => 'https://source.unsplash.com/random/800x600',
            'author' => $faker->name,
        ];
    }

    public function render(): View
    {
        $data = [
            'post' => $this->post,
        ];

        return view('livewire.show-post', $data)
            ->title($this->post['title']);
    }
}
