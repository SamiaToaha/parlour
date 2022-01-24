<header class="header_left header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- logo begin -->
                <div id="logo">
                    <a href="https://perfectparlour.com/">
                        <!-- <img class="logo logo_dark_bg"
                            src="https://perfectparlour.com/wp-content/uploads/2020/03/Perfect-Beauty-Logo-70.png"
                            alt=""> -->
                        <img class="logo logo_light_bg"
                            src="https://perfectparlour.com/wp-content/uploads/2020/03/Perfect-Beauty-Logo-70.png"
                            alt="">
                    </a>
                </div>
                <!-- logo close -->

                <!-- small button begin -->
                <div id="menu-btn"></div>
                <!-- small button close -->

                <!-- mainmenu begin -->
                <nav>

                    <ul id="mainmenu" class="primary">
                        <li id="menu-item-3215"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3215">
                            <a title="Home" href="{{route('home.dashboard')}}">Home</a></li>
                            
                            <li id="menu-item-3215"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3215">
                            <li><a title="Customer" href="{{route('website.profile')}}">Customer</a>
                            <ul role="menu" class="">

                            <li id="menu-item-2377"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2377">
                                    @if(Auth::check())
                                    <a title="Feedback" href=" {{route('feedback.website')}} ">Give Feedback</a></li>
                                    @endif
                                       

                            </ul>
</li>
                        <li><a href="{{route('website.expert')}}">Beautician</a></li>
                        <li id="menu-item-1042"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1042"><a
                            href="{{route('website.booking')}}">Appointment</a></li>
                            <li id="menu-item-1042"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1042"><a
                            href="{{route('cart.get')}}">Cart({{session()->has('cart') ? count(session()->get('cart')):0}})</a></li>
                        <li id="menu-item-1209"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1209 ">
                            <a title="Our Services" href="{{route('website.type')}}">Services </a>
                            <ul role="menu" class="">

                            <li id="menu-item-2377"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2377"><a
                                        title="ServiceCategory" href=" {{route('Website.service_category')}} ">Service Category</a></li>
                           
                                       

                            </ul>
                        </li>
                        <!-- <li id="menu-item-1037" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1037"><a  title="Packages" href="https://perfectparlour.com/packages/">Packages</a></li> -->

                        <li id="menu-item-3136"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3136 ">
                            <a href="{{route('website.time')}}">Time Slot </a>

                            <!-- <li id="menu-item-3136"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3136 ">
                            <a href="{{route('feedback.website')}}">Feedback</a>
                            </li> -->
                            <li id="menu-item-1045" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1045"><a  title="Contact" href="{{route('user.registration')}}">Register</a></li>
                        
                        @if(auth()->user())
                        <!-- Button trigger modal -->

                        <a href="{{route('user.logout')}}" class="btn btn-success">{{auth()->user()->name}} | Logout</a>

                        @else
                        <li id="menu-item-1045"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1045"><a
                                title="Contact" href="{{route('user.registration')}}">Register</a></li>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
                            Login
                        </button>
                        @endif

                    </ul>
                </nav>

                <div class="clearfix"></div>
            </div>
            <!-- mainmenu close -->

        </div>
    </div>
</header>

<!-- Button trigger modal -->
<!-- Button trigger modal -->


<!-- Modal -->


<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('user.loggedin')}}" method='POST'>
              @csrf
              <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" 
                      aria-describedby="emailHelp" placeholder="Enter email">

              </div>

              <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" 
                      placeholder="Password">
              </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
</div>
</div>
