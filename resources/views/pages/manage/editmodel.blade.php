@extends('pages.management')
@section('content')
                        
                    <div id="tab3" class="tabcontent">
                        @if(session('note'))
                            <div class="alert alert-success">
                                {{session('note')}}
                            </div>
                        @endif
                        <h3>Edit a Model</h3>
                        <div class="form">
                            <form action="editmodel" method="POST" enctype="multipart/form-data">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/> 

                                <div class="form_row">
                                        <label>Model</label>
                                        <select class="form_select" name="laytenxe" id="laytenxe">
                                            @foreach($allproduct as $xe)
                                            <option value="{{$xe->id}}">{{$xe->tenxe}}</option>
                                            @endforeach
                                        </select>
                                </div>   
                                    
                                <div class="form_row">
                                    <label>Model</label>
                                    <input type="text" class="form_input" name="tenxe" value="{{$xe->tenxe}}"/>
                                </div>

                                <div class="form_row">
                                    <label>Brand</label>
                                    <select class="form_select" name="brand" id="brand">
                                        @foreach($hang as $hang)
                                        <option value="{{$hang->id}}">{{$hang->hang}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form_row">
                                    <label>Type</label>
                                    <select class="form_select" name="type" id="type">
                                        @foreach($loai as $loai)
                                        <option value="{{$loai->id}}">{{$loai->loai}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="form_row">
                                    <label>Segment</label>
                                    <select class="form_select" name="seg" id="seg">
                                        @foreach($pk as $pk)
                                        <option value="{{$pk->id}}">{{$pk->phankhuc}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            
                                <div class="form_row">
                                    <label>Price</label>
                                    <input type="text" class="form_input" name="gia" value="{{$xe->gia}}" />
                                </div>

                                <div class="form_row">
                                    <label>Year</label>
                                    <input type="text" class="form_input" name="namsx" value="{{$xe->namsx}}"/>
                                </div>

                                <div class="form_row">
                                    <label>Infomation</label>
                                    <input type="text" class="form_input" name="mota" value="{{$xe->mota}}"/>
                                </div>

                                <img scr="{{$xe->hinh}}"/>
                                <div class="form_row">
                                    <label>Image</label>
                                    <input type="file" class="form_input" name="hinh" value="{{$xe->hinh}}"/>
                                </div>                            
                                    
                                <div class="form_row">
                                    <label>Number</label>
                                    <input type="text" class="form_input" name="soluong" value="{{$xe->soluong}}" />
                                </div>

                                <div class="form_row">
                                    <input type="submit" class="form_submit" value="Summit" />
                                </div> 
                                <div class="clear"></div>
                            </form>
                        </div>
                    </div>
@endsection