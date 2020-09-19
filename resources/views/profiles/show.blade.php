@extends('layouts.app')

@section('content')
<div class="container">
<!-- ici on est sur la partie présentation-->
    <div class="row mt-4">
        <div class="col-4 text-center">
            <img src="{{ $user->profile->getImage() }}" class="rounded-circle w-100" style="max-width: 230px">
        </div>
        <div class="col-8">
            <div class="d-flex align-items-baseline">
                <div class="h4 mr-3 pt-2">{{ $user->username }}</div>
                <follow-button profile-id="{{ $user->profile->id }}" follows="{{ $follows }}"></follow-button>
            </div>
            <div class="d-flex mt-3">
                <div class="mr-5"><strong>{{ $user->posts->count() }}</strong> publication(s)</div>
                <div class="mr-5"><strong>{{ $user->profile->followers->count() }}</strong> abonné(s)</div>
                <div class="mr-5"><strong>{{ $user->following->count() }}</strong> abonnement(s)</div>
            </div>
            @can('update', $user->profile)
            <a href="{{ route('profiles.edit', ['username' => $user->username]) }}" class="btn btn-outline-secondary mt-3" >Modifier mes informations</a>
            @endcan
            <div class="mt-3">
                <div class="font-weight-bold">{{ $user->profile->titre }}</div>
                <div>{{ $user->profile->presentation }}</div>
                <a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a>
            </div>
        </div>
    </div>
<!-- fin présentation - nouvelle row pour les posts-->
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="{{ route('posts.show', ['post' => $post->id]) }}">
                <img src="{{ asset('storage') . '/' . $post->image }}" class="w-100" alt="bière barbar">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
