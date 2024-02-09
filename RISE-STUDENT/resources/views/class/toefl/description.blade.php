@extends('partial.master')

@section('content')
<H1 class="text-warning text-left" style="padding-left: 2.5cm"><b>TOEFL</b></H1><br>
<div class="row" style="padding-left:10%">
    <div class="col">
        <h4><b>Description</b></h4>
        <p>TOEFL means ........</p>
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

    </div>
    <div class="col" style="padding-left:3cm;">

        <div class="card" style="width: 28rem; background-color:#cbb667">
            <img src="data:image/png;base64,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" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><b>TOEFL Preparation Class</b></h5><br>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="/registration" class="btn btn-dark text-white">Registration</a>
            </div>
          </div>

    </div>

</div>

@endsection

