<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/" ><img src="{{url('img/jugLogo.png')}}"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="/">HOME</a></li>
        <li><a href="{{url('/video')}}">VIDEOS</a></li>
        <li><a href="{{url('/picture')}}">PHOTOS</a></li>
        <li><a href="{{url('/event')}}">TOUR</a></li>
        <li><a href="{{url('/book/create')}}">BOOKING</a></li>
        <li><a href="{{url('/merchandise')}}">MERCHANDISE</a></li>

        <li class="dropdown navbar-right">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">PRESS<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/press/1')}}">Album Review</a></li>
            <li><a href="{{url('/press/2')}}">A Night of Rockabilly</a></li>

          </ul>
        </li>

      </ul>
 




                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                        <li><a href="{{ url('/login') }}">Login</a></li>
{{--                         <li><a href="{{ url('/register') }}">Register</a></li> --}}
                    @else
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('/welcome/1/edit')}}">Edit Bio</a></li>                 
                            <li><a href="{{url('/event/create')}}">Add Event</a></li>
                            <li><a href="{{url('/book')}}">Booking List</a></li>
                            <li><a href="{{url('/picture/create')}}">Add Picture</a></li>
                            <li><a href="{{url('/merchandise/orders')}}">Contraband Pending</a></li>
                            <li><a href="{{url('/merchandise/shipped')}}">Contraband Shipped</a></li>

                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
     

               </div>
  </div>

</nav>


