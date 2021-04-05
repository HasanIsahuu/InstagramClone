@extends('layouts.app')

@section('content')
<form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST"> 
   @csrf
   @method('PATCH')
    <div class="row">
    <div class="col-8 offset-2">
    <div class="row">
    <h1>Edit Profile</h1>
    </div>
        <label for="title" >Title</label>

        
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" 
            name="title" 
            title="title" 
            value="{{ old('title') ?? $user->profile->title }}" 
            required autocomplete="title" 
            autofocus>

            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        <label for="description" >Description</label>

        
            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" 
            name="description" description="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        <label for="url" >URL</label>

        
            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" 
            name="url" url="url" value="{{ old('url') ?? $user->profile->url}}" required autocomplete="url" autofocus>

            @error('url')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    
    <div class="row">
    <label for="image" class="col-md-4 col-form-label text-md-left"><h4>Profile Image : </h4></label> 
    <input type="file" class="form-control-file" id="image" name="image">
    @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    
    <div class="row pt-5">
    <button class="btn btn-primary">Save Profile</button>
    </div>
    </div>
    </div>
    </div>
    
</div>
</form>
@endsection
