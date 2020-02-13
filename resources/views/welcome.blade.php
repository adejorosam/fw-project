<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  {{-- !chiefdaddy1234 --}}
    <meta charset="utf-8">
    <meta name="View Courseport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fwacademy') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom fonts for this template -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
footer.footer {
  padding-top: 4rem;
  padding-bottom: 4rem;
  margin-bottom: 0;
}
</style>
	<body>

		<!-- Header -->
		<header id="header" class="transparent-nav">
				<!-- /Navigation -->
                @include('inc.navbar')
		</header>
		<!-- /Header -->

{{-- <div class="container">
    <div class="center">
        <h2>Beginner to Job-ready</h2>
        Findworka Academy is equipping African youths with the most on-demand technology skills
    </div>
</div> --}}
<div id="home" class="hero-area">

    <!-- Backgound Image -->
    <div class="bg-image bg-parallax overlay" style="background-image:url('https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/07/sb-blog-programming.png')"></div>
    <!-- /Backgound Image -->

    <div class="home-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="white-text">Findworka Academy Online Training Courses</h1>
                    <p class="lead white-text">Findworka Academy is equipping African youths with the most on-demand technology skills</p>
                    <a class="main-button icon-button" href="/register">Get Started!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="about" class="section">

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <div class="col-md-6">
                <div class="section-header">
                    <h2>Welcome to Findworka Academy</h2>
                    <p class="lead">Beginnner to Job-Ready</p>
                </div>

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-flask"></i>
                    <div class="feature-content">
                        <h4>Online Courses </h4>
                        <p>You can learn anywhere - either at our Lagos training centers or from your couch. This means that you can re-learn difficult concepts by watching our materials.</p>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-users"></i>
                    <div class="feature-content">
                        <h4>Expert Teachers</h4>
                        <p>We have world-class facilitators to put learners through the principle of software development</p>
                    </div>
                </div>
                <!-- /feature -->

                <!-- feature -->
                <div class="feature">
                    <i class="feature-icon fa fa-comments"></i>
                    <div class="feature-content">
                        <h4>Saucecode Community</h4>
                        <p>Our closely knit circle of techies, staying updated on tech trends and following gig alerts.</p>
                    </div>
                </div>
                <div class="feature">
                  <i class="feature-icon fa fa-comments"></i>
                  <div class="feature-content">
                      <h4>Pay more than once</h4>
                      <p>Here at Findworka, we give you the graace and privilege to pay twice..</p>
                  </div>
              </div>
                <!-- /feature -->

            </div>

            <div class="col-md-6">
                <div class="about-img">
                    <img src="https://www.bitdegree.org/tutorials/wp-content/uploads/2018/08/what-is-a-web-developer.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- row -->

    </div>
    <!-- container -->
</div>
    
  {{-- test --}}
  <div class="container" id="courses">
    <div class="section-header">
        <h2>Have access to our programs</h2>
        <p>Jump Right Back Into Learning</p>
    </div>
    <div class="container">
      <div class="row">
      <div class="col-md-4">
        <div class="card mb-4 box-shadow"> 
          <img class="card-img-top" src="https://seo-trench.com/wp-content/uploads/2019/11/12-Websites-You-Should-Check-Out-to-Learn-Web-Development-Fast.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"> Web Development </p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{url('/webdev')}}">View Courses</a></button>
              </div>
              <small class="text-muted"> 3 months</small>
            </div>
          </div>
        </div>
      </div>
    
       <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTm9YzPIyZmwkbWi_SW7GxT2Jex96fay9ULAJGjDTYqzfh1ZnZG" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Data Science</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{url('/datascience')}}">View Courses</a></button>
              </div>
              <small class="text-muted">3 months</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="data:image/png;base64,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" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Mobile Development</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{url('/mobile')}}">View Courses</a></button>
              </div>
              <small class="text-muted">3 months</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQSTs8COekt8K3B32mi-fyvuDX7lpKiBvlT9OLzhWueGt3hC1XJ" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"> UI/UX Design</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{url('/uiux')}}">View Courses</a></button>
              </div>
              <small class="text-muted">3 months</small>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
      {{-- <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/07/sb-blog-programming.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text"></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View Course</button>
              </div>
              <small class="text-muted">3 months</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top" src="https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/07/sb-blog-programming.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Introduction to PHP Laravel</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" href="#"class="btn btn-sm btn-outline-secondary">View Course</button>
              </div>
              <small class="text-muted">58 mins</small>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div> --}}
{{-- test end --}}


		<!-- Contact CTA -->
		<div id="contact-cta" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url('https://res.cloudinary.com/springboard-images/image/upload/q_auto,f_auto,fl_lossy/wordpress/2019/07/sb-blog-programming.png')"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row --> --}}
				<div class="row">

					{{-- <div class="col-md-12 col-md-offset-2 text-center"> --}}
                    <div class="col-lg-3 col-md-12 text-center ">
						<h2 class="white-text center">Contact Us</h2>
						<p class="lead white-text">Get In Touch With Us.</p>
						<a class="main-button icon-button" href="{{url('/contact')}}">Contact Us Now</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container --> --}}

		</div>
		<!-- /Contact CTA -->
<!-- /About -->
    @include('inc.footer')
    </body>
</html>