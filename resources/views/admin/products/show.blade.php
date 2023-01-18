@extends('layouts.admin.app')

@section('content')
<h1 class="border-bottom w-100 p-2">Details</h1>

<div class="container">
    <div class="row">
        <div class="col-4">
            <img class="img-fluid" src="{{asset('storage/' . $product->image)}}" alt="">
        </div>
        <div class="col-8">
            <h2>{{$product->title}}</h2>
            <div class="mb3">
                <h6 class="d-inline">Descrizione: </h6>{{$product->description}}
            </div>
            <div class="my-3">Prezzo:{{$product->price}}</div>
        </div>
    </div>
</div>

@endsection