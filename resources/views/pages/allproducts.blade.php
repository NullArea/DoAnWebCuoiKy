@extends('layouts.admin')
<title>Management Moto-Heart</title>
@section('content')
<div class="content-wrapper">
        <div class="content-top">
            <div class="about_wrapper"><h1>All motor here (total {{$num}} model || {{$total}} motor)</h1>
            </div>           
            <div class="text">
                @foreach($allproduct as $product)
                <div class="grid_1_of_3 images_1_of_3">
                    <div class="grid_1">
                        <a href="{{route('detail',$product->stt)}}"><img src="{{$product->hinh}}" title="continue reading" alt=""></a>
                        <div class="grid_desc">
                            <p class="title">{{$product->tenxe}} {{$product->namsx}}</p>

                            <div class="price" style="height: 19px;">
                                <span class="reducedfrom">{{$product->gia}}$</span>
                                <span class="actual">00$</span>
                                <span>{{$product->soluong}} left</span>
                            </div>
                        
                        </div>
                    </div><div class="clear"></div>
                </div>
                @endforeach            
            </div>
            <div class="clear"></div>                   
        </div>        
    </div>
</div>           
@endsection