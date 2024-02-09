@extends('partial.master')

@section('judul')
<H3><b>List Category</b></H3>
@endsection

@section('content')
<h1><b>List Product</b></h1><br>
{{-- @auth --}}
<a href="/category/create" class="btn btn-primary btn-sm mb-4">Add Product</a>    
{{-- @endauth --}}

<div class="row">
    @forelse ($category as $item)
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('category_image/'.$item->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    {{-- <span class="badge badge-info">{{$item->kategori->nama_kategori}}</span> --}}
                    <p class="card-text">{{Str::limit($item->description,50)}}</p>
                    <a href="/category/{{$item->id}}" class="btn btn-secondary btn-block btn-sm">Detail</a>
                    {{-- @auth --}}
                    <div class="row my-2">
                        <div class="col">
                            <a href="/category/{{$item->id}}/edit" class="btn btn-info btn-block btn-sm">Edit</a>
                    
                        </div>
                        <div class="col">
                            <form action="category/{{$item->id}}" method="POST">
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
     <h2>Tidak ada Produk</h2>
    @endforelse


</div>


@endsection