@extends('layouts.app')

@section('title', 'Блог - site-admin')

@section('name', 'Блог')

@section('content')
<div class="container">
    <div class="row row justify-content-center">
        <div class="content">
            <a href="{{ route('blog.index') }}" class="back">Back </a>

            <p>{{ $article['name'] }}</p>
            <p></p>
            <div class="img-uploaded">
                <img src="{{ $article['image'] }}" alt="">
            </div>
            <div class="container">{!! $article['text'] !!}</div>
            <p>{{ $article['created_at'] }}</p>
            {{ $author }}

            <hr>

            Previous comments:

            <hr>

            <div class="comment-form">
                <form action="{{ route('blog/addComment', $article['id']) }}" method="post" class="col-sm-6">
                    @csrf <!-- {{ csrf_field() }} -->
                    <div class="mb-3">
                        <label for="email_input" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email_input" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="name_input" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name_input" name="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="comment_input" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="comment_input" name="text" rows="3"></textarea>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Save comment</button>
                    </div>
                    
                    <input type="hidden" name="article_id" value="{{ $article['id'] }}" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection