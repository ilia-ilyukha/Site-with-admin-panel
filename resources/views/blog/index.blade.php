@extends('layouts.app')

@section('title', 'Блог - site-admin')

@section('name', 'Блог')

@section('content')

<style>
	.post-thumb {
		border: 1px solid #ddd;
		margin: 20px;
		overflow: auto;
		text-align: center;
	}

	.post-thumb img {
		width: 150px;
		height: 200px;
	}
</style>

<div class="container">
	<div class="row justify-content-center">
		<div class="">
			<h1>Blog Posts</h1>
			<div class="row">
				@foreach ($articles as $article)
				<div class="col-xs-12">
					<div class="post-thumb">
					<a href="{{ route('blog.show', $article) }}" class="link">
						<h2>
							
								{{ $article->name }}
							
						</h2>
						<img src="{{ $article->image }}" alt="" class="img-uploaded" style="display: block; width: 300px">
						<p>{{ $article->annotation }}</p>
						<h4>By {{ $article->nickname }}.</h4>
						</a>
					</div>
				</div>
				@endforeach
			</div>


		</div>
	</div>
</div>
@endsection