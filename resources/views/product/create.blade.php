@extends('layout.product')
@section('content')
    <head><title>Create</title></head>
    <div>
        <hr>
        <div>
            <form action="{{route('product.store')}}" method="Post">
                @csrf
                <div style="margin-bottom: 15px;">
                    <input type="text" name="name" placeholder="name" value="{{old('name')}}">
                </div>
                <div style="margin-bottom: 15px;">
                    <input type="number" step="0.01" min='0' name="price" placeholder="price" value="{{old('price')}}">
                </div>
                <div style="margin-bottom: 15px;">
                    <input type="number" name="category_id" placeholder="id" value="{{old('category_id')}}">
                </div>
                <div style="margin-bottom: 15px;">
                    <textarea name="description" placeholder="description" >{{old('description')}}</textarea>
                </div>
                <div style="margin-bottom: 15px;"><input type="submit" value="Добавить"></div>
            </form>
        </div>
    </div>
@endsection
