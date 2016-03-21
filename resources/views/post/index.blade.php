@extends('base')

@section('styles')
@endsection

@section('content')
	@foreach ($posts as $post)
		<p>post: {{ $post->id }}</p>
	@endforeach
@endsection

@section('scripts')
@endsection