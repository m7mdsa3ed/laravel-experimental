<div>
    @foreach($posts as $post)
        <a href="/posts/{{ $post['id'] }}" class="link-dark" wire:navigate>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p class="card-text">{{ $post['body'] }}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>
