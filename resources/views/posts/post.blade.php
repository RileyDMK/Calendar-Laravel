<div class="card">
  <h4>
    <a href="/posts/{{ $post->id }}">
      {{ $post->title }}
    </a>
  </h4>
  <p>{{ $post->created_at->toFormattedDateString() }}</p>
  <p class="card-text">{{ $post->body }}</p>
</div>
