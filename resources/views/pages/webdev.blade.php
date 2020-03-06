@extends('layouts.app')
@section('title', 'Web Development | Findworka')
@section('content')
    <header class="web-dev">
        {{-- <div class="row">
            <h1 class="web-dev-intro justify-content-center">Web Development</h1>
        </div> --}}
        <h1 class="web-dev-intro text-white font-weight-bold">Web Development</h1>
    </header>

    <div class="container what-do-you-want-to-offer">
        <div class="row justify-content-center">
            <h3>What course do you want to offer?</h3>
        </div>
        {{-- <div class="row justify-content-center">
            <div class="dropdown mt-3">
                <button class="btn btn-outline dropdown-toggle dropdown-form" type="button" data-toggle="dropdown">
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Select</a></li>
                  <li><a class="dropdown-item" href="#">Front-end Development</a></li>
                  <li><a class="dropdown-item" href="#">Back-end Development</a></li>
                  <li><a class="dropdown-item" href="#">Full-stack Development</a></li>
                </ul>
              </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <select name id="input" class="form-control">
                    <option value>Select</option>
                    <option id="frontend" value="frontend">Frontend</option>
                    <option id="backend" value="backend">Backend</option>
                    <option id="both" value="both">Both</option>
                </select>
            </div>
            <div class="col-lg-4"></div>
        </div>
        <div class="frontend" style="display: none;">
            <div class="row mt-5">
                <div class="col-lg-8 col-md-8 col-sm-7">
                    <h3 class="mt-3 font-weight-bold">Description</h3>
                    <p class="small">
                        Front-end web development involves learning how to develop 
                        websites and applications, interact with data and convert data 
                        to graphical interface for users to view using web technologies 
                        which run on the Open Web Platform or act as compilation input for 
                        non-web platform environments.
                    </p>
                    <h3 class="mt-3 font-weight-bold">What you'll learn</h3>
                    <ul>
                        <li class="m-3 small">HTML5 & CSS</li>
                        <li class="m-3 small">CSS Framework: Bootstrap</li>
                        <li class="m-3 small">JavaScript</li>
                        <li class="m-3 small">Object Oriented Programming (OOP)</li>
                        <li class="m-3 small">Introduction to React</li>
                        <li class="m-3 small">Git and Commandline</li>
                        <li class="m-3 small">And finally build a complete website</li>
                    </ul>
                    <h3 class="mt-4 font-weight-bold">Requirement</h3>
                    <p class="small">A laptop</p>
                    <h3 class="mt-4 font-weight-bold">Academy Location</h3>
                    <p class="small">Lagos, Ibadan, Abeokuta, Port-Harcourt, Abuja</p>
                    <h3 class="mt-4 font-weight-bold">Learning Type</h3>
                    <p class="small">ONSITE (Cohort 1 Academy Classes would ONLY Take place at our provided Facilities in Lagos)</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5">
                    <div class="card card-shadow-web">
                        <p class="text-center lead p-3 font-weight-bold">Timeline</p>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-weight-bold">Application Opens</p>    
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-center">May 24th 2020</p>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-weight-bold">Application Closes</p>    
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-center">May 24th 2020</p>    
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-weight-bold">Academy Starts</p>    
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-center">April 15th 2020</p>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-weight-bold">Academy Ends</p>    
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-center">July 19th 2020</p>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 card-shadow-web">
                        <p class="text-center lead p-3 font-weight-bold">Class</p>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6"><p class="font-weight-bold">Starts</p></div>
                                <div class="col-md-6"><p class="text-center">April 15th, 2020</p></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><p class="font-weight-bold">Ends</p></div>
                                <div class="col-md-6"><p class="text-center">July 19th, 2020</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 card-shadow-web">
                        <p class="text-center lead p-3 font-weight-bold">Days/Time</p>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6"><p class="font-weight-bold">Mon-Sat</p></div>
                                <div class="col-md-6"><p class="text-center">09:00am - 12:00pm</p></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><p class="font-weight-bold">Sunday</p></div>
                                <div class="col-md-6"><p class="text-center">12:00pm - 4:00pm</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 card-shadow-web">
                        <div class="row p-3">
                            <div class="col-md-6"><p class="lead">Price</p></div>
                            <div class="col-md-6"><p class="lead text-center">300,000</p></div>
                        </div>
                    </div>
                    <a href="{{url('/webdev')}}" class="btn text-white btn-block mt-3 font-weight-bold" style="background-color:black">Download Syllabus!</a>
                <a href="{{url('apply/1')}}" class="btn text-white btn-block mt-3 font-weight-bold" style="background-color:purple">Apply Now!</a>
                </div>
            </div>
        </div>
        <div class="backend" style="display: none;">
            <div class="row mt-5">
                <div class="col-lg-8 col-md-8 col-sm-7">
                    <h3 class="mt-3 font-weight-bold">Description</h3>
                    <p class="small">
                        Back-end web development involves learning how to develop 
                        websites and applications, interact with data and convert data 
                        to graphical interface for users to view using web technologies 
                        which run on the Open Web Platform or act as compilation input for 
                        non-web platform environments.
                    </p>
                    <h3 class="mt-3 font-weight-bold">What you'll learn</h3>
                    <ul>
                        <li class="m-3 small">HTML5 & CSS</li>
                        <li class="m-3 small">CSS Framework: Bootstrap</li>
                        <li class="m-3 small">JavaScript</li>
                        <li class="m-3 small">Object Oriented Programming (OOP)</li>
                        <li class="m-3 small">Introduction to React</li>
                        <li class="m-3 small">Git and Commandline</li>
                        <li class="m-3 small">And finally build a complete website</li>
                    </ul>
                    <h3 class="mt-4 font-weight-bold">Requirement</h3>
                    <p class="small">A laptop</p>
                    <h3 class="mt-4 font-weight-bold">Academy Location</h3>
                    <p class="small">Lagos, Ibadan, Abeokuta, Port-Harcourt, Abuja</p>
                    <h3 class="mt-4 font-weight-bold">Learning Type</h3>
                    <p class="small">ONSITE (Cohort 1 Academy Classes would ONLY Take place at our provided Facilities in Lagos)</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5">
                    <div class="card card-shadow-web">
                        <p class="text-center lead p-3 font-weight-bold">Timeline</p>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-weight-bold">Application Opens</p>    
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-center">May 24th 2020</p>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-weight-bold">Application Closes</p>    
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-center">May 24th 2020</p>    
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-weight-bold">Academy Starts</p>    
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-center">April 15th 2020</p>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-weight-bold">Academy Ends</p>    
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-center">July 19th 2020</p>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 card-shadow-web">
                        <p class="text-center lead p-3 font-weight-bold">Class</p>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6"><p class="font-weight-bold">Starts</p></div>
                                <div class="col-md-6"><p class="text-center">April 15th, 2020</p></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><p class="font-weight-bold">Ends</p></div>
                                <div class="col-md-6"><p class="text-center">July 19th, 2020</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 card-shadow-web">
                        <p class="text-center lead p-3 font-weight-bold">Days/Time</p>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6"><p class="font-weight-bold">Mon-Sat</p></div>
                                <div class="col-md-6"><p class="text-center">09:00am - 12:00pm</p></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><p class="font-weight-bold">Sunday</p></div>
                                <div class="col-md-6"><p class="text-center">12:00pm - 4:00pm</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 card-shadow-web">
                        <div class="row p-3">
                            <div class="col-md-6"><p class="lead">Price</p></div>
                            <div class="col-md-6"><p class="lead text-center">300,000</p></div>
                        </div>
                    </div>
                    <button class="btn text-white btn-block mt-3 font-weight-bold" style="background-color:purple">Apply Now!</button>
                </div>
            </div>
        </div>
        <div class="both" style="display: none;">
            <div class="row mt-5">
                <div class="col-lg-8 col-md-8 col-sm-7">
                    <h3 class="mt-3 font-weight-bold">Description</h3>
                    <p class="small">
                        Full-stack web development involves learning how to develop 
                        websites and applications, interact with data and convert data 
                        to graphical interface for users to view using web technologies 
                        which run on the Open Web Platform or act as compilation input for 
                        non-web platform environments.
                    </p>
                    <h3 class="mt-3 font-weight-bold">What you'll learn</h3>
                    <ul>
                        <li class="m-3 small">HTML5 & CSS</li>
                        <li class="m-3 small">CSS Framework: Bootstrap</li>
                        <li class="m-3 small">JavaScript</li>
                        <li class="m-3 small">Object Oriented Programming (OOP)</li>
                        <li class="m-3 small">Introduction to React</li>
                        <li class="m-3 small">Git and Commandline</li>
                        <li class="m-3 small">And finally build a complete website</li>
                    </ul>
                    <h3 class="mt-4 font-weight-bold">Requirement</h3>
                    <p class="small">A laptop</p>
                    <h3 class="mt-4 font-weight-bold">Academy Location</h3>
                    <p class="small">Lagos, Ibadan, Abeokuta, Port-Harcourt, Abuja</p>
                    <h3 class="mt-4 font-weight-bold">Learning Type</h3>
                    <p class="small">ONSITE (Cohort 1 Academy Classes would ONLY Take place at our provided Facilities in Lagos)</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5">
                    <div class="card card-shadow-web">
                        <p class="text-center lead p-3 font-weight-bold">Timeline</p>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-weight-bold">Application Opens</p>    
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-center">May 24th 2020</p>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-weight-bold">Application Closes</p>    
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-center">May 24th 2020</p>    
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-weight-bold">Academy Starts</p>    
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-center">April 15th 2020</p>    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="font-weight-bold">Academy Ends</p>    
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-center">July 19th 2020</p>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 card-shadow-web">
                        <p class="text-center lead p-3 font-weight-bold">Class</p>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6"><p class="font-weight-bold">Starts</p></div>
                                <div class="col-md-6"><p class="text-center">April 15th, 2020</p></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><p class="font-weight-bold">Ends</p></div>
                                <div class="col-md-6"><p class="text-center">July 19th, 2020</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 card-shadow-web">
                        <p class="text-center lead p-3 font-weight-bold">Days/Time</p>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6"><p class="font-weight-bold">Mon-Sat</p></div>
                                <div class="col-md-6"><p class="text-center">09:00am - 12:00pm</p></div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"><p class="font-weight-bold">Sunday</p></div>
                                <div class="col-md-6"><p class="text-center">12:00pm - 4:00pm</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 card-shadow-web">
                        <div class="row p-3">
                            <div class="col-md-6"><p class="lead">Price</p></div>
                            <div class="col-md-6"><p class="lead text-center">300,000</p></div>
                        </div>
                    </div>
                    <button class="btn text-white btn-block mt-3 font-weight-bold" style="background-color:purple">Apply Now!</button>
                </div>
            </div>
        </div>

    </div>

@endsection