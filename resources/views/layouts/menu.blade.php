

<div class="custom-header sticky-top">

   <header class="bg-white">

        <!-- / contact content -->
        <div class="container">
          <!-- logo -->
          <strong class="logo">
              <a href="{{url('/')}}">
                <img src="{{url('/')}}/assets/images/log.png" alt="" style="height: 60px;">
              </a>
          </strong>
          <!-- open nav mobile -->

          <!--search -->
          <label class="open-search" for="open-search">
            <i class="fas fa-search" style="font-size: 19px;
            margin-right: 13px;"></i>
            <input class="input-open-search" id="open-search" type="checkbox" name="menu" />
            <div class="search">
              <button class="button-search"><i class="fas fa-search"></i></button>
              <input type="text" placeholder="আপনি কোন বই খুঁজছেন?" class="input-search" />
            </div>
          </label>
          <!-- // search -->
          <nav class="nav-content">
            <!-- nav -->

            @if (Auth::check())


            <ul class="nav-content-list">
                <li class="nav-content-item account-login">
                  <label class="open-menu-login-account" for="open-menu-login-account" style="margin-top: 10px">

                    <input class="input-menu" id="open-menu-login-account" type="checkbox" name="menu" />

                    <i class="fas fa-user-circle" style="font-size:20px"></i>


                    <span class="ml-1"> {{Auth::user()->name}}</span>

                    <!-- submenu -->
                    <ul class="login-list text-left">
                      <li class="login-list-item"><a > <i class="fas fa-user-circle    "></i> My account</a></li>






                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>




                        <li class="login-list-item"><a href="" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt    "></i> Logout</a></li>


                  </label>
                </li>
              </ul>


              @else


              <ul class="nav-content-list">
                <li class="nav-content-item account-login">
                  <label class="open-menu-login-account" for="open-menu-login-account" style="margin-top: 10px">

                    <input class="input-menu" id="open-menu-login-account" type="checkbox" name="menu" />

                    <i class="fas fa-user-circle" style="font-size:20px"></i>

                    <span class="login-text">Hello, Sign in <strong>Create Account</strong></span> <span class="item-arrow"></span>

                    <!-- submenu -->
                    <ul class="login-list text-left">
                      <li class="login-list-item"><a  href="{{ url('/login') }}"> Login</a></li>
                      <li class="login-list-item"><a  href="{{ url('/register') }}">Create account</a></li>

                  </label>
                </li>
              </ul>

            @endif










            <li class="nav-content-item"><a class="nav-content-link" href="{{route('cart_show')}}"><i class="fas fa-shopping-cart"></i>

                @auth

                <span class="badge badge-primary badge-xs" style="font-size: 10px;
                top: 4px;
                position: absolute;">{{App\Models\Cart::where('user_id', Auth::user()->id)->count()}}</span>

                @endauth

                </a></li>
            <!-- call to action -->
            <li class="nav-content-item d-md-none d-block">
                <a class="nav-content-link" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId">
                    <i class="fas fa-bars" style="font-size: 16px;
                    display: block;
                    background: #4799ff;
                    padding: 13px;
                    border-radius: 25px;
                    width: 40px;
                    height: 40px;
                    color: #fff;"></i>
              </a>
          </li>



            </ul>
          </nav>
        </div>
      </header>

      </div>


      <nav class="navbar navbar-expand-sm navbar-light bg-white">
          <div class="container">



          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="{{url('/')}}">হোম পেজ <span class="sr-only">(current)</span></a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/blogs')}}">লেখাগুলো</a>
                </li>


                  {{-- <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">সব লাইব্রেরি</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="#">Action 1</a>
                          <a class="dropdown-item" href="#">Action 2</a>
                      </div>
                  </li> --}}
              </ul>
              <!-- <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form> -->
          </div>
          </div>

      </nav>
