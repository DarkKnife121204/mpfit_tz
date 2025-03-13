@extends('layout.order')
@section('content')
    <head><title>Create</title></head>
    <div>
        <hr>
        <div>
            <form action="{{route('order.store')}}" method="Post">
                @csrf
                <div style="margin-bottom: 15px;">
                    <input type="text" name="full_name" placeholder="Full name" value="{{old('full_name')}}">
                </div>
                <div style="margin-bottom: 15px;">
                    <input type="number"  min='1' name="product_id" placeholder="product_id" value="{{old('product_id')}}">
                </div>
                <div style="margin-bottom: 15px;">
                    <input type="number" name="quantity" placeholder="quantity" value="{{old('quantity')}}">
                </div>
                <div style="margin-bottom: 15px;">
                    <textarea name="comment" placeholder="comment" >{{old('comment')}}</textarea>
                </div>
                <div style="margin-bottom: 15px;"><input type="submit" value="Добавить"></div>
            </form>
        </div>
    </div>
@endsection
