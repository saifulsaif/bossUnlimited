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
    <div class="acount-header-btn">

      <span class="register-btn">{{ Auth::user()->name }}</span>
    </div>
    @endguest
    @guest
    <a href="add-listing.html" title="" class="view-all-blog"><i class="la la-plus"></i>Free Point</a>
    @else
      <a href="{{ route('logout') }}"  onclick="event.preventDefault();	 document.getElementById('logout-form').submit();" title="" class="add-listing-btn"> Point : 55.64</a>
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
    @else
    <select class="SlectBox">
      <option data-display="Select">	{{ Auth::user()->name }}</option>

      <a class="dropdown-item" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
        <option href="{{ route('logout') }}" data-display="Select">{{ __('Logout') }}</option>
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>

    </select>

    @endguest
		@guest
		<a href="{{ route('logout') }}"  onclick="event.preventDefault();	 document.getElementById('logout-form').submit();" title="" class="add-listing-btn"><i class="la la-plus"></i> Point : 55.64</a>
		@else
    @php
    $user_id=Auth::user()->id;
    $profile = DB::table('Profiles')->where('user_id',$user_id)->first();
    $points = DB::table('Points')->where('user_id',$user_id)->first();
    @endphp
		<div class="search-header">
		<div class="review-avatar"> <a href="{{route('profile')}}"><img style="border-radius: 50%;height: 55px;width: 55px;margin-top: 16px;margin-left: 10px" src="{{$profile->photo}}" alt=""></a> </div>
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
