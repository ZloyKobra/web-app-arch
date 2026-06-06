@extends('layouts.app')

@section('title', 'Все посты')

@section('content')
    <h1 class="mb-4">Все посты</h1>
    
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

    {{ $posts->links() }}
@endsection
