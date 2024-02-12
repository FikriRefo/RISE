@extends('partial.master')
@section('judul')
<H3><b>Update Teacher Profile</b></H3>
@endsection

@section('content')
<form action="/teacher/{{$teacher->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
      <div class="form-group">
        <label >Name</label>
        <input type="text" name="name" class="form-control" value="{{$teacher->name}}">
      </div>
      @error('name')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
  
      <div class="form-group">
        <label >NIK</label>
        <input type="text" name="nik" class="form-control" value="{{$teacher->nik}}">
      </div>
      @error('name')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
  
      <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$teacher->description}}</textarea>    
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