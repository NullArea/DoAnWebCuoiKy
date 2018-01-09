@extends('layouts.default')
@section('title', 'Products')
@section('content')
    <div class="content-wrapper">
        <div class="content-top">
            <div class="about_wrapper"><h1>Choose one you want!</h1>
            </div>
           
            <div class="text">
                @foreach($allproduct as $product)
                <div class="grid_1_of_3 images_1_of_3">
                    <div class="grid_1">
                        <a href="{{route('detail',$product->id)}}"><img src="{{$product->hinh}}" title="continue reading" alt=""></a>
                        <div class="grid_desc">
                            <p class="title">{{$product->tenxe}}</p>

                            <div class="price">
                                <span class="reducedfrom">{{$product->gia}}$</span>
                                <span class="actual"></span>
                            </div>
                            <div class="cart-button">
                                <div class="cart">
                                <a href="{{route('detail',$product->id)}}"><button class="button"><span>Details</span></button></a>
                                </div>
                                <button class="button"><span>Cart</span></button>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div><div class="clear"></div>
                </div>
                @endforeach            
            </div>
            <div class="clear"></div>
            <div>{{$allproduct->links()}} </div>                   
        </div>
        
    </div>
    
@endsection
