@section('title', 'Show Post')

<div>
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $post['title'] }}</h5>
            <p class="card-text">{{ $post['body'] }}</p>

            <a href="/posts" class="btn btn-primary" wire:navigate>Back</a>
        </div>
    </div>
</div>
