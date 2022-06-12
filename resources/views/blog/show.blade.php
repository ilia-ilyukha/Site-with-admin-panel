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
            <img src="{{ $article['image'] }}" />
            <div class="container">{!! $article['text'] !!}</div>
            <p>{{ $article['created_at'] }}</p>
            {{ $author }}
        </div>
    </div>
</div>
@endsection