@extends('base')

@section('title', 'Blog')

@section('styles')
@endsection

@section('content')

		<div class="title-bg" style="background-image:url({{$post->header_image}})">
		</div>
		<a class="overlay" >
			<p class="title-date">{{$post->date_string}}</p>
				<p class="title-link">{{$post->title}}</p>
			<div class="title-tags">
			@foreach(explode(',',$post->tags) as $tag)
				<p class="title-tag">{{$tag}}</p>
			@endforeach
			</div>
		</a>
		<div class="post-content">
			{!! $post->content !!}
		</div>
@endsection

@section('scripts')
@endsection