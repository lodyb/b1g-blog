@extends('base')

@section('title', 'Blog')

@section('styles')
@endsection

@section('content')
	@foreach ($posts as $post)
		<div class="title-bg" style="background-image:url({{$post->header_image}})">
		</div>
		<a class="overlay" href="p/{{$post->date_string}}/{{$post->permalink}}" >
			<p class="title-date">{{$post->date_string}}</p>
				<p class="title-link">{{$post->title}}</p>
			<div class="title-tags">
			@foreach(explode(',',$post->tags) as $tag)
				<p class="title-tag">{{$tag}}</p>
			@endforeach
			</div>
		</a>
	@endforeach
@endsection


@section('scripts')
@endsection