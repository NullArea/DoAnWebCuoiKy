<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Management</title>
<link rel="stylesheet" type="text/css" href="{{asset('cssad/style.css')}}" />

<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<!-- jQuery file -->
<script src="{{asset('jsad/jquery.min.js')}}"></script>
<script src="{{asset('jsad/jquery.tabify.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
var $ = jQuery.noConflict();
$(function() {
$('#tabsmenu').tabify();
$(".toggle_container").hide(); 
$(".trigger").click(function(){
	$(this).toggleClass("active").next().slideToggle("slow");
	return false;
});
});
</script>
</head>
<body>
    <div id="panelwrap">
        
        <div class="header">
            <div class="title"><a href="#">Admin</a></div>
            
            <div class="header_right">Welcome Admin<a href="changepass" class="settings">Change Password</a> <a href="/" class="logout">Logout</a> </div>
            
            
        </div>
        
        
                        
        <div class="center_content">  
    
            <div id="right_wrap">
                <div id="right_content">             
                    <h2>Products</h2> 
                        
                        
                    
                    <table id="rounded-corner" class="scroll">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image Link</th>
                                <th>Price</th>
                                <th>Editon</th>
                                <th>Number</th>
                                <th>ID</th>
                                <th>---</th>
                                <th>---</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <td colspan="12"></td>
                            </tr>
                        </tfoot>
                        <tbody>
                            
                            @foreach($allproduct as $product)
                            <tr class="odd">
                                <td>{{$product->tenxe}}</td>
                                <td>{{$product->hinh}}</td>
                                <td>{{$product->gia}}</td>
                                <td>{{$product->namsx}}</td>
                                <td>{{$product->soluong}}</td>
                                <td>{{$product->id}}</td>
                                <td>---</td>
                                <td>---</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
        
                    <ul id="tabsmenu" class="tabsmenu">
                        <div class="form_row">
                            <a href="addmotor"><input type="submit" class="form_choose" value="Add Motor" /></a>
                            <a href="addmodel"><input type="submit" class="form_choose" value="Add Model" /></a>

                            <a href="editmodel"><input id="remove" type="submit" class="form_choose" value="Edit" /></a>
                            <a href="remove"><input type="submit" class="form_choose" value="Remove" /></a>
                        </div>
                    </ul>
                    @yield('content')   
                </div><!-- end of right content-->
</div>
                        
                        
                    <div class="sidebar" id="sidebar">
        
                        <h2>Products</h2>
            
                        <ul>
                            <li><a href="allproducts">See all products whith image</a></li>
                        </ul> 
                
                        <h2>User Settings</h2>
            
                        <ul>
                            <li><a href="#">Edit user</a></li>
                            <li><a href="#">Add users</a></li>
                            <li><a href="#">Manage users</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
            </div> <!--end of center_content-->
        
            <div class="footer">
                Template By <a href="https://themefurnace.com/free-templates" rel="designer">ThemeFurnace</a>
            </div>
        </div>
    </div>
</body>
</html>