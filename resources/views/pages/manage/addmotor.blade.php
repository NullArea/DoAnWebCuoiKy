@extends('pages.management')
@section('content')
                        
                    <div id="tab1" class="tabcontent">
                        @if(session('note'))
                            <div class="alert alert-success">
                                {{session('note')}}
                            </div>
                        @endif
                        <h3>Add a motor to your store</h3>
                        <div class="form">
                            <form action="addmotor" method="POST" enctype="multipart/form-data">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>    
                                    
                                    <div class="form_row">
                                        <label>Name</label>
                                        <select class="form_select" name="tenxe" id="tenxe">
                                            @foreach($allproduct as $xe)
                                            <option value="{{$xe->id}}">{{$xe->tenxe}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form_row">
                                        <label>Number</label>
                                        <input type="text" class="form_input" name="soluong" id="soluong"/>
                                    </div>

                                
                                    <div class="form_row">
                                        <input type="submit" class="form_submit" value="Submit" />
                                    </div> 
                                    <div class="clear"></div>
                            </form>
                        </div>
                    </div>
@endsection