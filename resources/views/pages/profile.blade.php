@extends('layouts.default')
@section('title', 'Profile')
@section('content')
            <div class="header_bottom_right_images">
                <div class="about_wrapper"><h1>Information</h1>
                </div>
                <div class="section group">
                    <div class="col span_2_of_c">
                        <div class="contact-form">
                            
                            <form action="profile" method="POST" enctype="multipart/form-data">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <div>
                                    <span><label>NAME</label></span>
                                    <span><input name="name" type="text" class="textbox" value="{{ Auth::user()->name }}" disable="true"></span>
                                </div>
                                <div>
                                    <span><label>E-MAIL</label></span>
                                    <span><input name="email" type="text" class="textbox" value="{{ Auth::user()->email }}"></span>
                                </div>
                                <div>
                                    <span><label>MOBILE</label></span>
                                    <span><input name="phone" type="text" class="textbox" value="{{ Auth::user()->phone }}"></span>
                                </div>
                                <div>
                                    <span><label>Address</label></span>
                                    <span><input name="address" type="text" class="textbox" value="{{ Auth::user()->address }}"></span>
                                </div>
                                <div>
                                    <span><label>Password</label></span>
                                    <span><input name="password" type="text" class="textbox" value="{{ Auth::user()->password }}"></span>
                                </div>
                                <div>
                                    <span><input type="submit" value="Change"></span>
                                </div>
                            </form>
                        </div>
                    </div><div class="clear"></div>
                </div>
            </div>
@endsection