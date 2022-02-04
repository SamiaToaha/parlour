<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
          
          
        </div>
        <ul class="nav">

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard.profile')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('customer.show')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Customer</span>
            </a>
         
          
          <ul role="menu" class="">
                                    
                                    @if(Auth::check())
                                    
                                    <li class="nav-item">
            <a class="nav-link" href="{{route('admin.feedback')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Show Feedback</span>
            </a>
          </li>
</ul>
</li>
                                    <!-- <a title="Feedback" href=" {{route('admin.feedback')}} ">Show Feedback</a> -->
                                    @endif
                                    <!-- </ul>
</li> -->
                                
                                    

          <li class="nav-item">
            <a class="nav-link" href="{{route('appointment.profile')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Appointment</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('beautician.profile')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Beautician</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" {{route('admin.service')}} ">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Service</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('service_category.profile')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Service Category</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="{{route('create.package')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Packages</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="{{route('check.report')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Report</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('timeslot.profile')}}">
              <i class="icon-box menu-icon"></i>
              <span class="menu-title">Time Slot</span>
            </a>
          </li>
          
          
          
        </ul>
      </nav>