@extends('layout.product')
@section('content')
    <head><title>Index</title></head>
    <div>
        <hr>
            <div>
                <a href="{{route('order.index')}}"> Заказы</a>
            </div>
        <hr>
            <div>
                <a href="{{route('product.create')}}"> Добавить</a>
            </div>
        <hr>
        @foreach($products as $product)
            <div>
                <div>Name: {{$product->name}}</div>
                <div>Price: {{$product->price}}</div>
                <div>Category: {{$product->category_id}}</div>
                <div>
                    <a href="{{ route('product.show', $product->id) }}">Просмотреть</a>
                        <div>
                            <a href="{{ route('product.edit', $product->id) }}">Редактировать</a>
                        </div>
                </div>
                    <div>
                        <form action="{{route('product.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('Delete')
                            <input type="submit" value="Удалить">
                        </form>
                    </div>
            </div>
            <hr>
        @endforeach

@endsection
