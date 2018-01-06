@extends('layouts.default')
@section('title', 'Detail of Products')
@section('content')
    <div class="content-wrapper">
        <div class="content-top">
            <div class="about_wrapper">
                <h1>{{$product->tenxe}}</h1>
                <h3>Edition {{$product->namsx}} - {{$product->gia}}$</h3>
            </div>
            <img src="{{$product->hinh}}">
            <p>{{$product->mota}}</p>            
        </div>
    </div>
@endsection
