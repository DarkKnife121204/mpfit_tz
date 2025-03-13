@extends('layout.order')
@section('content')
    <head><title>Index</title></head>
    <div>
        <hr>
            <div>
                <a href="{{route('product.index')}}"> Продукты</a>
            </div>
        <hr>
            <div>
                <a href="{{route('order.create')}}"> Добавить</a>
            </div>
        <hr>
        @foreach($orders as $order)
            <div>
                <div>Id: {{$order->id}}</div>
                <div>Create: {{$order->created_at}}</div>
                <div>Full name: {{$order->full_name}}</div>
                <div>Status: {{$order->status}}</div>
                <div>Total price: {{$order->total_price}}</div>
                <div>
                    <a href="{{ route('order.show', $order->id) }}">Просмотреть</a>
                </div>
            </div>
            <hr>
        @endforeach

@endsection
