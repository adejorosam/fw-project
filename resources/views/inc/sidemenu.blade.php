
{{-- <ul> <h3>User Management</h3> 
    <li><a href="{{url('/user')}}/create"> Create user</a></li>
    <li><a  href="{{url('/user')}}"> View Users </a></li>
</ul>
    
<ul> <h3>Role Management</h3>
        <li><a href="{{url('/role')}}"> View Role </a></li>
        <li><a href="{{url('role/create')}}"> Create Roles </a></li>
        <li><a href="{{url('/permission')}}"> View Permissions </a></li>
        <li><a href="{{url('permission/create')}}"> Create Permissions</a></li>
</ul>
<br><br>
 --}}
{{-- <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
    <a href="#">

            <img class="img-fluid w-50 mt-3 mb-1" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570873250/startng/Logo_1_ib5bjh.png">

        </a>

    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            {{-- <li class="{{ (request()->is('admin')) ? 'active' : '' }}">
                <a href="{{url('/user')}}">
                    <i class="fa fa-users"></i>
                    <p>View All Users</p>
                </a>
            </li> --}}
            <li class="{{ (request()->is('course')) ? 'active' : '' }}">
                <a href="{{url('/admin')}}">
                        <i class="fa fa-book"></i>
                        <p>View All Courses</p>
                    </a>
                </li>
                <li class="{{ (request()->is('tutor')) ? 'active' : '' }}">
                    <a href="{{url('/tutor')}}">
                        <i class="fa fa-users"></i>
                        <p>View All Tutors</p>
                    </a>
                </li>
                <li class="{{ (request()->is('user')) ? 'active' : '' }}">
                    <a href="{{url('/user')}}">
                        <i class="fa fa-users"></i>
                        <p>View All Students</p>
                    </a>
                </li>
                <li class="{{ (request()->is('admin/create')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <p>Create Admin</p>
                    </a>
                </li>
                {{-- <li class="{{ (request()->is('schedule/create')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <p>Create Schedule</p>
                    </a>
                </li> --}}
                <li class="{{ (request()->is('course/create')) ? 'active' : '' }}">
                    <a href="{{url('admin/create')}}">
                        <i class="fa fa-book"></i>
                        <p>Create Course</p>
                    </a>
                </li>
                {{-- <li class="{{ (request()->is('course-content/create')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <p>Create Course Content</p>
                    </a>
                </li> --}}
                <li class="{{ (request()->is('submission')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <p>View submissions</p>
                    </a>
                </li>
                {{-- <li class="{{ (request()->is('resource')) ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa fa-file"></i>
                        <p>Resources</p>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div> --}}