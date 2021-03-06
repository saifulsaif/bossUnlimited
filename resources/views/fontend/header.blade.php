<div class="responive-header">
  <div class="logo"><a href="{{ route('home') }}" title=""><img src="{{asset($settings->logo)}}	" alt="" /></a></div>
  <span class="open-responsive-btn"><i class="la la-bars"></i><i class="la la-close"></i></span>
  <div class="resp-btn-sec">
      @guest
    <div class="acount-header-btn">
      <span class="register-btn">Register</span>/
      <span class="login-btn">LogIn</span>
    </div>
    @else
    @php
    $user_id=Auth::user()->id;
    $profile = App\Profile::where('user_id',$user_id)->first();
      $points = App\Point::where('user_id',$user_id)->first();
    @endphp
    <div class="acount-header-btn">

      <a href="{{route('profile')}}"><img style="border-radius: 50%;height: 55px;width: 55px;margin-top: 16px;margin-left: 10px" src="{{asset('/'.$profile->photo)}}" alt=""></a>
      <span style="margin: 0px 0px 0 13px;color: #ffffff;font-family: Roboto;font-size: 16px;">{{ Auth::user()->name }}</span>
      <a href="{{ route('logout') }}" title="Logout"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
     <img style="border-radius: 50%;height: 40px;width: 40px;margin-top: 24px;margin-left: 10px"  src="{{asset('/images/logo/logout.png')}}">
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </div>
    @endguest
    @guest
    <a href="add-listing.html" title="" class="view-all-blog"><i class="la la-plus"></i>Free Point</a>
    @else
       <a href="{{ route('logout') }}"  onclick="event.preventDefault();	 document.getElementById('logout-form').submit();" title="" class="add-listing-btn"> Point : {{$points->point}}</a>
    @endguest

    <div class="search-header">
      <span class="open-search"><i class="la la-search"></i><i class="la la-close"></i></span>
      <form>
        <input type="text" placeholder="Search">
      </form>
    </div>
  </div>
  <div class="responisve-menu">
    <span class="close-reposive"><i class="la la-close"></i></span>
    <div class="logo"><a href="{{ route('home') }}" title=""><img src="{{asset($settings->logo)}}"  alt="" /></a></div>
    <ul>
      <li><a href="{{ route('home') }}" title="">Home</a></li>
      <li><a href="{{ route('photo') }}" title="">Photos</a></li>
      <li><a href="{{ route('video') }}" title="">Videos</a></li>
      <li><a href="{{ route('promotion') }}" title="">Promition</a></li>
      <li><a href="{{ route('contact') }}" title="">Contact US</a></li>
      @guest
      @else
      <li><a href="{{route('profile')}}" title="">Profile</a></li>
      @endguest
    </ul>
  </div>
</div><!-- Responsive-header -->
<header class="on-top dark">
		<div class="logo"><a href="{{ route('home') }}" title=""><img src="{{asset($settings->logo)}}" alt="" /></a></div>
		<div class="menu-sec">
      @guest
    <div class="acount-header-btn">
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
      <span class="login-btn">LogIn</span>
      <span class="register-btn">Register</span>
    </div>
    @endguest
		@guest
	 <a href="{{ route('logout') }}"  onclick="event.preventDefault();	 document.getElementById('logout-form').submit();" title="" class="add-listing-btn"> <i class="la la-plus"></i>Free Point</a>
		@else
    <div class="search-header">
         <div class="review-avatar">
           <a href="{{ route('logout') }}" title="Logout"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <img style="border-radius: 50%;height: 40px;width: 40px;margin-top: 24px;margin-left: 10px"  src="{{asset('/images/logo/logout.png')}}">
           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
           </form>
      </div>
   </div>
    <div class="search-header">
      <h3 style="margin: 37px 0px 0 13px;color: #ffffff;font-family: Roboto;font-size: 16px;">{{ Auth::user()->name }}</h3>
   </div>
    <div class="search-header">
    <div class="review-avatar"> <a href="{{route('profile')}}"><img style="border-radius: 50%;height: 55px;width: 55px;margin-top: 16px;margin-left: 10px" src="{{asset('/'.$profile->photo)}}" alt=""></a> </div>
   </div>
	 <a href="{{ route('logout') }}"  onclick="event.preventDefault();	 document.getElementById('logout-form').submit();" title="" class="add-listing-btn"> Point : {{$points->point}}</a>
  @endguest
			<nav class="header-menu">
        <ul>
          <li><a href="{{ route('home') }}" title="">Home</a></li>
          <li><a href="{{ route('photo') }}" title="">Photos</a></li>
          <li><a href="{{ route('video') }}" title="">Videos</a></li>
          <li><a href="{{ route('promotion') }}" title="">Promition</a></li>
          <li><a href="{{ route('contact') }}" title="">Contact US</a></li>
          @guest
          @else
          <li><a href="{{route('profile')}}" title="">Profile</a></li>
          @endguest
        </ul>
			</nav>
		</div>
	</header>
