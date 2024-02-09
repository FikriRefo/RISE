@extends('partial.master')
@section('judul')
<H3><b>Add Category</b></H3>
@endsection

@section('content')
<form action="/category" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label >Name</label>
        <input type="text" name="name" class="form-control">
      </div>
      @error('name')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
  
      <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>    
      </div>
      @error('description')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror

      <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control-file">
      </div>
      @error('image')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
  
      <button type="submit" class="btn btn-primary">Submit</button>
      
      
    </form>
@endsection

