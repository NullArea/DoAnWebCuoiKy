@extends('pages.management')
@section('content')
                    <div id="tab2" class="tabcontent">
                        @if(session('note'))
                            <div class="alert alert-success">
                                {{session('note')}}
                            </div>
                        @endif
                        <h3>Add new model</h3>
                        <div class="form">
                            <form action="addmodel" method="POST" enctype="multipart/form-data">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
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
                                    <label>Name</label>
                                    <input type="text" class="form_input" name="tenxe" />
                                </div>
                            
                                <div class="form_row">
                                    <label>Price</label>
                                    <input type="text" class="form_input" name="gia" />
                                </div>

                                <div class="form_row">
                                    <label>Year</label>
                                    <input type="text" class="form_input" name="namsx" />
                                </div>

                                <div class="form_row">
                                    <label>Infomation</label>
                                    <input type="text" class="form_input" name="mota" />
                                </div>

                                <div class="form_row">
                                    <label>Image</label>
                                    <input type="file" class="form_input" name="hinh" />
                                </div>

                                <div class="form_row">
                                    <label>Number</label>
                                    <input type="text" class="form_input" name="soluong" />
                                </div>

                                <div class="form_row">
                                    <input type="submit" class="form_submit" value="Submit" />
                                </div> 
                                <div class="clear"></div>
                            </form>
                        </div>
                    </div>
@endsection