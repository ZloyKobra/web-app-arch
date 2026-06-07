@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <article class="mb-4">
        <h1>{{ $post->title }}</h1>
        <p class="text-muted">
            Автор: {{ $post->author->name }} · 
            {{ $post->created_at->format('d.m.Y H:i') }}
        </p>
        
        <div class="mt-3">
            {{ $post->body }}
        </div>

        @can('update', $post)
            <div class="mt-3">
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-primary">
                    Редактировать
                </a>
                <form method="POST" action="{{ route('posts.destroy', $post) }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" 
                            onclick="return confirm('Удалить пост?')">
                        Удалить
                    </button>
                </form>
            </div>
        @endcan
    </article>

    <hr>

    <h3>Комментарии ({{ $post->comments->count() }})</h3>

    @forelse ($post->comments as $comment)
        <div class="card mb-2">
            <div class="card-body">
                <p class="card-text">{{ $comment->body }}</p>
                <small class="text-muted">
                    {{ $comment->author->name }} · 
                    {{ $comment->created_at->format('d.m.Y H:i') }}
                </small>
            </div>
        </div>
    @empty
        <p class="text-muted">Комментариев пока нет.</p>
    @endforelse

    @auth
        <hr>
        <h4>Добавить комментарий</h4>
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="mb-3">
                <textarea name="body" class="form-control @error('body') is-invalid @enderror" 
                          rows="3" required>{{ old('body') }}</textarea>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    @else
        <p class="text-muted mt-3">
            <a href="{{ route('login') }}">Войдите</a>, чтобы оставить комментарий.
        </p>
    @endauth
@endsection
