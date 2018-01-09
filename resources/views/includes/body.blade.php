<div class="header-bg">
	<div class="wrap">
		<div class="h-bg">
			<div class="total">
				<div class="header">
					<div class="box_header_user_menu">
						<ul class="user_menu">
							@if (Auth::guest())
								<li class="act first">
								</li>
								<li class="">
									<a href="{{ route('register') }}">
										<div class="button-t">
											<span>Create an Account</span>
										</div>
									</a>
								</li>
								<li class="last">
									<a href="{{ route('login') }}">
										<div class="button-t">
											<span>Log in</span></div>
									</a>
								</li>
                        	@else
								<li class="dropdown">
									<a href="profile" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
										{{ Auth::user()->name }}
									</a>
								</li>
				
								<li>
									<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
										Dang Xuat
									
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
			
                        	@endif

						
						</ul>
					</div>
					<div class="header-right">
						<ul class="follow_icon">
							<li><a href="#"><img src="images/icon.png" alt=""/></a></li>
							<li><a href="#"><img src="images/icon1.png" alt=""/></a></li>
							<li><a href="#"><img src="images/icon2.png" alt=""/></a></li>
							<li><a href="#"><img src="images/icon3.png" alt=""/></a></li>
						</ul>
					</div><div class="clear"></div>
					<div class="header-bot">
						<div class="logo">
							<a href="/"><img src="images/logo3.png" alt=""/></a>
						</div>
						<div class="search">
							<input id="word" name="word" type="text" class="textbox" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
							<a href="search"><button class="gray-button"><span>Search</span></button></a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="menu">
					<div class="top-nav"> 
						<ul>
							<li class="active"><a href="/">Home</a></li>
							<li><a href="about">About</a></li>
							<li><a href="products">Products</a></li>
							<li><a href="news">News</a></li>
							<li><a href="contact">Contact</a></li>
						</ul>
					<div class="clear"></div> 
				</div>
				<div class="banner-top">
					<div class="header-bottom">
						<div class="header_bottom_right_images">
							@yield('content')
						</div>
						<div class="header-para">
								<div class="box">
									<div class="box-heading"><h1><a href="#">Cart:&nbsp;</a></h1></div>
									<div class="box-content">
										Now in your cart&nbsp;<strong> 0 items</strong>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div id="map"></div>
						<script>
							function myMap() {
								var mapCanvas = document.getElementById("map");
								var mapOptions = {
									center: new google.maps.LatLng(10.762639092330923,106.68199999999999), zoom: 15
								};
								var map = new google.maps.Map(mapCanvas, mapOptions);
							}
						</script>
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzUiwecG-pkEEtg-0K-UQ_QUGBNHSF8RU&callback=myMap"></script>
						<div class="clear"></div>
						<div class="footer-bottom">
							<div class="copy">
								<p>Phone: +84962408090</p>
								<p>Headquarters: 227 Nguyen Van Cu, Ward 4, District 5, HCM</p>
								<p>&copy 2017 Motor Heart . All rights Reserved | Design by <a href="https://www.facebook.com/tnanh.fit">Ngọc Anh</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>