@extends('partial.master')
@section('judul')
<H3><b>Update Category</b></H3>
@endsection

@section('content')
<form action="/category/{{$category->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      <div class="form-group">
        <label >Name</label>
        <input type="text" name="name" class="form-control" value="{{$category->name}}">
      </div>
      @error('name')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
  
      <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$category->description}}</textarea>    
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

