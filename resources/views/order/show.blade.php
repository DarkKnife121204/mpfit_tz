@extends('layout.order')
@section('content')
    <head><title>Show: {{$order->name}}</title></head>
    <div>
        <hr>
        <div>
            <div>Id: {{$order->id}}</div>
            <div>Create: {{$order->created_at}}</div>
            <div>Full name: {{$order->full_name}}</div>
            <div>Status: {{$order->status}}</div>
            <div>Comment: {{$order->comment}}</div>
            <div>Product: {{$order->product_id}}</div>
            <div>Total price: {{$order->total_price}}</div>
            <div>
                <a href="{{ route('order.index') }}">Назад</a>
            </div>
            <div>
                <form action="{{route('order.update', $order->id)}}" method="post">
                    @csrf
                    @method('Patch')
                    <input type="submit" value="Готов">
                </form>
            </div>
        </div>
        <hr>
    </div>
@endsection
