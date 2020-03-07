
<!-- Vertical navbar -->
<div class="vertical-nav" id="sidebar" style="background-color: #3A0765;">
    <div class="py-4 px-3 mb-4">
        <a href="/">
            <img alt="" class="img-fluid" src="images/logo.jpg">
        </a> 
    </div>

    <ul class="nav flex-column mb-0">
        <li class="nav-item">
            <a href="/profile" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-th-large mr-3 fa-fw"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('admin')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-users mr-3 fa-fw"></i> View Admins
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('profile/create')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-users mr-3 fa-fw"></i> Create Admin
            </a>
        </li>
        <li class="nav-item">
        <a href="{{url('user')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-address-card mr-3 fa-fw"></i> View Users
            </a>
        </li>
       
    <li class="nav-item">
        <a href="{{url('regusers')}}" class="nav-link font-italic py-3 mb-1 ">
            <i class="fa fa-address-card mr-3 fa-fw"></i> View Students
        </a>
    </li>
         <li class="nav-item">
         <a href="{{url('tutor')}}" class="nav-link font-italic py-3 mb-1 ">
            <i class="fa fa-users mr-3 fa-fw"></i> View Tutors
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('tutor/create')}}" class="nav-link font-italic py-3 mb-1 ">
               <i class="fa fa-users mr-3"></i> Create Tutor
               </a>
           </li>
        <li class="nav-item">
            <a href="{{url('program')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-book mr-3"></i> View Programs
                </a>
            </li>
        <li class="nav-item">
            <a href="{{url('program/create')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-book mr-3"></i> Create Program
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('course')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-book mr-3"></i> View Courses
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('course/create')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-book mr-3"></i> Create Course
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('assignments')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-users mr-3 fa-fw"></i> View Assignments
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('submission')}}" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-users mr-3 fa-fw"></i> View Submissions
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link font-italic py-3 mb-1 ">
                <i class="fa fa-currency mr-3 fa-fw"></i> View Payments
            </a>
        </li>
        
       
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