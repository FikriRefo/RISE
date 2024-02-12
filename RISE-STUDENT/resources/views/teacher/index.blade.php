@extends('partial.master')

@section('judul')
<H3><b>List Teacher</b></H3>
@endsection

@section('content')
<h1><b>List Teacher</b></h1><br>
{{-- @auth --}}
<a href="/teacher/create" class="btn btn-primary btn-sm mb-4">Add</a>    
{{-- @endauth --}}

<div class="row">
    @forelse ($teacher as $item)
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('teacher_image/'.$item->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <span class="badge badge-info">{{$item->nik}}</span>
                    <p class="card-text">{{Str::limit($item->description,50)}}</p>
                    <a href="/teacher/{{$item->id}}" class="btn btn-secondary btn-block btn-sm">Detail</a>
                    {{-- @auth --}}
                    <div class="row my-2">
                        <div class="col">
                            <a href="/teacher/{{$item->id}}/edit" class="btn btn-info btn-block btn-sm">Edit</a>
                    
                        </div>
                        <div class="col">
                            <form action="teacher/{{$item->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-block btn-sm" value="Delete">

                            </form>
                        </div>
                    </div>
                    {{-- @endauth --}}
                    
                </div>
            </div> 
        </div>
              
    @empty
     <h2>Tidak ada Guru</h2>
    @endforelse


</div>


@endsection