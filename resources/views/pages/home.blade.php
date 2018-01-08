@extends('layouts.default')
@section('title', 'Moto-Heart')
@section('content')
        <div id="slideshow">
            <ul class="slides">
                @foreach($slide as $slide)

                <li><a href="{{route('detail',$slide->id)}}"><canvas ></canvas><img src="{{$slide ->link}}" alt="Noble" ></a></li>
                @endforeach
            </ul>
            <span class="arrow previous"></span>
            <span class="arrow next"></span>
        </div>
        <div class="content-wrapper">
            <div class="content-top">
                <div class="box_wrapper"><h1>New Products</h1>
                </div>
                <div class="text">
                    @foreach($new as $product)
                    <div class="grid_1_of_3 images_1_of_3">
                        <div class="grid_1">
                            <a href="{{route('detail',$product->stt)}}"><img src="{{$product->hinh}}" title="continue reading" alt=""></a>
                            <div class="grid_desc">
                                <p class="title">{{$product->tenxe}}</p>

                                <div class="price">
                                    <span class="reducedfrom">{{$product->gia}}$</span>
                                    <span class="actual">00$</span>
                                </div>
                                <div class="cart-button">
                                    <div class="cart">
                                        <button class="button"><span>Details</span></button>
                                    </div>
                                    <button class="button"><span>Cart</span></button>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div><div class="clear"></div>
                    </div>
                    @endforeach  
                </div>
            </div>
        </div>
@endsection
