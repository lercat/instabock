@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="{{ asset('storage' . '/' . $post->image) }}" class="w-75">
        </div>
        <div class="col-4">
            <h3>{{ $post->user->username }}</h3>
            <span>{{ $post->legende }}</span>
            <p>{{ $post->description }}</p>
            <h4>{{ $post->categorie }}</h4>
        </div>
    </div>
</div>
@endsection