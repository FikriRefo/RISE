@extends('partial.master')
@section('judul')
<H3><b>Registration</b></H3>
@endsection

@section('content')

<div class="row mb-3">
    <div class="col">
        <label for="formGroupExampleInput" class="form-label">First Name</label>
      <input type="text" class="form-control" placeholder="First Name" aria-label="First Name">
    </div>
    <div class="col">
        <label for="formGroupExampleInput" class="form-label">Last Name</label>
      <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name">
    </div>
  </div>
<div class="mb-3">
   <label for="formGroupExampleInput" class="form-label">Email</label>
   <input type="text" class="form-control" id="" placeholder="email@example.com">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Phone Number</label>
  <input type="text" class="form-control" id="" placeholder="Phone Number">
</div>
<label for="formGroupExampleInput2" class="form-label">Program</label>
<select class="form-control ">
  <option placeholder="">Choose Program</option>
  <option value="program">TOEFL</option>
  <option value="program">IELTS</option>
  <option value="program">GRE</option>
</select>
<br>
<a href="#" class="btn btn-dark text-white">Placement Test</a>
@endsection

