@extends('layout.product')
@section('content')
    <head><title>Edit: {{$product->name}}</title></head>
    <div>
        <hr>
        <div>
            <form action="{{route('product.update', $product->id)}}" method="Post">
                @csrf
                @method('Patch')
                <div style="margin-bottom: 15px;">
                    <input type="text" name="name" placeholder="name" value="{{old('name') ?? $product->name}}">
                </div>
                <div style="margin-bottom: 15px;">
                    <input type="number" name="price" placeholder="price" value="{{old('price') ?? $product->price}}">
                </div>
                <div style="margin-bottom: 15px;">
                    <input type="number" name="category_id" placeholder="id" value="{{old('category_id') ?? $product->category_id}}">
                </div>
                <div style="margin-bottom: 15px;">
                <textarea name="description" placeholder="description">
                    {{old('description') ?? $product->description}}
                </textarea >
                </div>
                <div style="margin-bottom: 15px;"><input type="submit" value="Сохранить"></div>
            </form>
        </div>
    </div>
@endsection
