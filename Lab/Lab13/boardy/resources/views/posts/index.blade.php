@extends('layouts.app')

@section('title', 'Все посты')

@section('content')
    <h1 class="mb-4">Все посты</h1>
    <div id="posts-feed">
    @forelse ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                </h3>
                <p class="card-text">{{ Str::limit($post->body, 200) }}</p>
                <small class="text-muted">
                    Автор: {{ $post->author->name }} · 
                    {{ $post->created_at->format('d.m.Y H:i') }}
                </small>
            </div>
        </div>
    @empty
        <div class="alert alert-info">
            Постов пока нет. <a href="{{ route('posts.create') }}">Создайте первый!</a>
        </div>
    @endforelse
    </div>
    {{ $posts->links() }}
    <script>
    const wsUrl = `wss://${window.location.host}/ws`

    function connect() {
        const ws = new WebSocket(wsUrl)
        ws.onopen    = () => console.log('WS connected')
        ws.onmessage = (e) => {
            const msg = JSON.parse(e.data)
            if (msg.type === 'new_post') prependPost(msg.post)
        }
        ws.onclose = () => setTimeout(connect, 3000)
    }
    
    function prependPost(post) {
        const feed = document.getElementById('posts-feed')
        if (!feed) return
        const el = document.createElement('div')
        el.className = 'card mb-3'
        el.innerHTML = `
            <div class="card-body">
                <h3 class="card-title">
                    <a href="/posts/${post.id}">${escapeHtml(post.title)}</a>
                </h3>
                <p class="card-text">${escapeHtml(post.body.substring(0, 200))}</p>
                <small class="text-muted">
                    Автор: ${escapeHtml(post.author)} ·
                    ${new Date(post.created_at).toLocaleString('ru-RU')}
                </small>
            </div>`
        feed.prepend(el)
    }
    
    function escapeHtml(str) {
        const d = document.createElement('div')
        d.textContent = str
        return d.innerHTML
    }
    
    connect()
    </script>
@endsection
