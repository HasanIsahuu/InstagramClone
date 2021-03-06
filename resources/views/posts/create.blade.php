@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/p" enctype="multipart/form-data" method="POST"> 
   @csrf
    <div class="row">
    <div class="col-8 offset-2">
    <div class="row">
    <h1>Add New Post</h1>
    </div>
        <label for="caption" >Image Caption</label>

        
            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" caption="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

            @error('caption')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    
    <div class="row">
    <label for="image" class="col-md-4 col-form-label text-md-left"><h4>Post Image :</h4></label> 
    <input type="file" class="form-control-file" id="image" name="image">
    @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    
    <div class="row pt-5">
    <button class="btn btn-primary">Add New Post </button>
    </div>
    </div>
    </div>
    </div>
    
</div>
</form>
@endsection