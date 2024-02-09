@extends('partial.master')

@section('content')
<H1 class="text-warning text-left" style="padding-left: 2.5cm"><b>{{$category->name}}</b></H1><br>
<div class="row" style="padding-left:10%">
    <div class="col">
        <h4><b>Description</b></h4>
        <p>{{$category->description}}</p>
        <br>
        <h4><b>Class Detail</b></h4>
        <table class="table table-bordered text-center">
          <thead>
            <tr style="background-color:#cbb667">
              <th scope="col">No</th>
              <th scope="col">Level</th>
              <th scope="col">Detail</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Epic</td>
              <td>Aduduu</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Grand Master</td>
              <td>Thornton</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Mythic</td>
              <td>Syalala</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Solo</td>
              <td>Levelling</td>
            </tr>
          </tbody>
        </table>
        <br>
        <a href="/category" class="btn btn-dark text-white">Back</a>
        <br>

    </div>
    <div class="col" style="padding-left:3cm;">

        <div class="card" style="width: 28rem; background-color:#cbb667">
            <img src="{{asset('category_image/'.$category->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><b>{{$category->name}} Preparation Class</b></h5><br>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="/registration" class="btn btn-dark text-white">Registration</a>
            </div>
          </div>

    </div>

</div>

@endsection

