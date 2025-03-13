@extends('layout.product')
@section('content')
    <head><title>Show: {{$product->name}}</title></head>
    <div>
        <hr>
        <div>
            <div>Id: {{$product->id}}</div>
            <div>Name: {{$product->name}}</div>
            <div>Price: {{$product->price}}</div>
            <div>Category: {{$product->category_id}}</div>
            <div>Description: {{$product->description}}</div>
            <div>Created: {{$product->created_at}}</div>
            <div>Updated: {{$product->updated_at}}</div>
            <div>
                <a href="{{ route('product.index') }}">Назад</a>
            </div>
        </div>
        <hr>
    </div>
@endsection
