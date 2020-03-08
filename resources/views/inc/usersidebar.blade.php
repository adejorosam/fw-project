<!-- Vertical navbar -->
<div class="vertical-nav" id="sidebar" style="background-color: black;">
    <div class="py-4 px-3 mb-4">
        <a href="/">
            <img alt="/" class="img-fluid" src="images/logo.jpg">
        </a> 
    </div>

    <ul class="nav flex-column mb-0">
        <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-th-large mr-3 fa-fw"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('userprofile')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-address-card mr-3 fa-fw"></i> My Profile
            </a>
        </li> 

         <li class="nav-item">
         <a href="{{url('/mycourses')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-cubes mr-3 fa-fw"></i> View My Courses
            </a>
        </li>
        {{-- <li class="nav-item">
            <a href="{{url('/#courses')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-book mr-3"></i> View Courses
            </a>
        </li> --}}
        {{-- <li class="nav-item">
            <a href="#" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-picture-o mr-3 fa-fw"></i> Review My Courses
            </a>
        </li> --}}
        <li class="nav-item">
            <a href="{{url('tasks')}}" class="nav-link font-italic py-3 mb-1 ">
                    <i class="fa fa-address-card mr-3 fa-fw"></i> View Assignment
                </a>
            </li> 
        {{-- <li class="nav-item">
        <a href="{{url('assignment/create')}}" class="nav-link font-italic py-3 mb-1 ">
            <i class="fa fa-book mr-3"></i> Submit Assignment
            </a>
        </li> --}}
        <li class="nav-item">
            <a href="{{url('performance')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-book mr-3"></i> View Performance
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('paymenthistory')}}" class="nav-link font-italic py-3 mb-1 ">
                    <i class="fa fa-address-card mr-3 fa-fw"></i> View Payment History
                </a>
            </li> 
        {{-- <li class="nav-item">
            <a href="#" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-picture-o mr-3 fa-fw"></i> Resources
            </a>
        </li> --}}
        <li class="nav-item">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="nav-link font-italic py-3 mb-1 ">
                    <i class="fa fa-picture-o mr-3 fa-fw"></i> {{ __('Logout') }}
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
    </ul>
    
</div>
<!-- End vertical navbar -->