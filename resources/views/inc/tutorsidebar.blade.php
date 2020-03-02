<!-- Vertical navbar -->
<div class="vertical-nav" id="sidebar" style="background-color: blue;">
    <div class="py-4 px-3 mb-4">
        <a href="/">
            <img alt="" class="img-fluid" src="images/logo.jpg">
        </a> 
    </div>

    <ul class="nav flex-column mb-0">
        <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-th-large mr-3 fa-fw"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
        <a href="{{url('tutorprofile')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-address-card mr-3 fa-fw"></i> My Profile
            </a>
        </li> 
         <li class="nav-item">
         <a href="{{url('students')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-cubes mr-3 fa-fw"></i> View Students
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('courses')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-book mr-3"></i> View Courses
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('task/create')}}" class="nav-link font-italic py-3 mb-1 ">
                    <i class="fa fa-address-card mr-3 fa-fw"></i> Create Assignment
                </a>
            </li> 
            <li class="nav-item">
                <a href="{{url('task')}}" class="nav-link font-italic py-3 mb-1 ">
                        <i class="fa fa-address-card mr-3 fa-fw"></i> View Assignments
                    </a>
                </li> 
        <li class="nav-item">
        <a href="{{url('assignment')}}" class="nav-link font-italic py-3 mb-1 ">
            <i class="fa fa-book mr-3"></i>View Submissions
            </a>
        </li>
        
        <li class="nav-item">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();" class="nav-link font-italic py-3 mb-1 ">
                    <i class="fa fa-sign-out mr-3 fa-fw"></i> {{ __('Logout') }}
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
    </ul>
    
</div>
<!-- End vertical navbar -->