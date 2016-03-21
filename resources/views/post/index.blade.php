@extends('base')

@section('title', 'Blog')

@section('styles')
@endsection

@section('content')
	@foreach ($posts as $post)
		<p>post: {{ $post->id }}</p>
		{{print_r($post)}}
		<br>
	@endforeach
@endsection

@section('scripts')
@endsection