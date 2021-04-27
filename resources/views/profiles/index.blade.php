@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle" height="200" width="200">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
            <div class="d-flex align-items-center pb-3">
            <div class="h4">{{ $user->name ?? 'Nuk ka te dhena' }}</div>
            <follow-button user-id="{{ $user ->id }}" follows="{{ $follows }}"></follow-button>
            </div>
                @can('update',$user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update',$user->profile)
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>{{$user->profile->followers->count() }}</strong> followers</div>
                <div class="pr-5"><strong>{{$user->following->count()}}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title ?? 'Nuk ka te dhena'}}</div>
            <div>{{$user->profile->description ?? 'Nuk ka te dhena'}}</div>
            <div><a href="#">{{$user->profile->url ?? 'Nuk ka te dhena'}}</a></div>
        </div>
    </div>
    <div class="row pt-4 ">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100">
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection