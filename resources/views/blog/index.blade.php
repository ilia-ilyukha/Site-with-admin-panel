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

	.img-uploaded {
		width: 100%;
		text-align: center;
	}

	.img-uploaded img {
		width: auto;
	}
</style>

<div class="container">
	<div class="row justify-content-center">
		<div class="content">
			<h1>Blog Posts</h1>
			<div class="row">
				@foreach ($articles as $article)
				<div class="col-xs-12">
					<div class="post-thumb">
						<a href="{{ route('blog.show', $article) }}" class="link">
							<h2>
								{{ $article->name }}
							</h2>
							<div class="img-uploaded">
								<img src="{{ $article->image }}" alt="">
							</div>

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