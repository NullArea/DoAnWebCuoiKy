@extends('layouts.default')
@section('title', 'Contact with NAGroup')
@section('content')
            <div class="header_bottom_right_images">
                <div class="about_wrapper"><h1>Long-Term Business</h1>
                </div>
                <div class="section group">
                    <div class="col span_2_of_c">
                        <div class="contact-form">
                            <h3>Contact Us</h3>
                            <form>
                                <div>
                                    <span><label>NAME</label></span>
                                    <span><input name="ten" type="text" class="textbox"></span>
                                </div>
                                <div>
                                    <span><label>E-MAIL</label></span>
                                    <span><input name="mail" type="text" class="textbox"></span>
                                </div>
                                <div>
                                    <span><label>MOBILE</label></span>
                                    <span><input name="sdt" type="text" class="textbox"></span>
                                </div>
                                <div>
                                    <span><label>SUBJECT</label></span>
                                    <span><textarea name="sub"> </textarea></span>
                                </div>
                                <div>
                                    <span><input type="submit" value="Submit"></span>
                                </div>
                            </form>
                        </div>
                    </div><div class="clear"></div>
                </div>
            </div>
@endsection