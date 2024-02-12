@extends('partial.master')

@section('content')
<H1 class="text-warning text-left" style="padding-left: 2.5cm"><b>{{$teacher->name}}</b></H1><br>
<div class="row" style="padding-left:10%">
    <div class="col">
        <h4><b>Description</b></h4>
        <p>{{$teacher->description}}</p>
        <br>
        <p>NIK : {{$teacher->NIK}}</p>
        <br>
        <a href="/teacher" class="btn btn-dark text-white">Back</a>
        <br>

    </div>
    <div class="col" style="padding-left:3cm;">

        <div class="card" style="width: 28rem; background-color:#cbb667">
            <img src="{{asset('teacher_image/'.$teacher->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><b>{{$teacher->name}}</b></h5><br>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

    </div>

</div>

@endsection

