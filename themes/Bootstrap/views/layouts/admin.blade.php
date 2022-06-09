<!doctype html>
<html lang="en">
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Snow's Blog</title>


 

 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery.min.js')}}" defer></script>
        <script src="{{ asset('js/popper.js')}}" defer></script>
        <script src="{{ asset('js/bootstrap.min.js')}}" defer></script>
        <script src="{{ asset('js/bootstrap1.min.js')}}" defer></script>
        <script src="{{ asset('js/main.js')}}" defer></script>
        <script src="{{asset('js/jquery-3.3.1.min.js')}}" defer></script>
        <script src="{{asset('js/popper.min.js')}}" defer></script>
    

</head>
<body>
<div id="app">
    <div class="container">
			<div class="row justify-content-between">
				<div class="col">
					<a class="navbar-brand" href="{{ url('/') }}">Blog <span>Magazine</span></a>
				</div>
              
                   
                   
                   
				<div class="col d-flex justify-content-end">
                    
                  
					<div class="social-media">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
		    			<a href="{{route('register')}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-sign-in"><i class="sr-only">log in</i></span></a>
		    			<a href="{{route('login')}}" class="d-flex align-items-center justify-content-center"><span class="fa fa-user-plus"><i class="sr-only">sign in</i></span></a>
		    		</p>
	                </div>
				</div>

			</div>
	</div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
				<form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="#">Page 1</a>
                <a class="dropdown-item" href="#">Page 2</a>
                <a class="dropdown-item" href="#">Page 3</a>
                <a class="dropdown-item" href="#">Page 4</a>
              </div>
            </li>
	        	<li class="nav-item"><a class ="nav-link" href="{{route('posts.all')}}">All Posts</a></li>
	        	<li class="nav-item"> <a class ="nav-link" href="{{route('addpost')}}">Add Post</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
	        </ul>
            <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home') }}">
                                      
                                        {{ __('profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

	</section>





	


    <div class="container">
            @yield('content')
    </div>
    </div>

    <footer class="footer-32892 pb-0">
      <div class="site-section">
        <div class="container">

          
          <div class="row">

            <div class="col-md pr-md-5 mb-4 mb-md-0">
              <h3>About Us</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam itaque unde facere repellendus, odio et iste voluptatum aspernatur ratione mollitia tempora eligendi maxime est, blanditiis accusamus. Incidunt, aut, quis!</p>
              <ul class="list-unstyled quick-info mb-4">
                <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-phone"></span> +1 291 3912 329</a></li>
                <li><a href="#" class="d-flex align-items-center"><span class="icon mr-3 icon-envelope"></span> info@gmail.com</a></li>
              </ul>

              <form action="#" class="subscribe">
                <input type="text" class="form-control" placeholder="Enter your e-mail">
                <input type="submit" class="btn btn-submit" value="Send">
              </form>
            </div>
            <div class="col-md mb-4 mb-md-0">
              <h3>Latest Tweet</h3>
              <ul class="list-unstyled tweets">
                <li class="d-flex">
                  <div class="mr-4"><span class="icon icon-twitter"></span></div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere unde omnis veniam porro excepturi.</div>
                </li>
                <li class="d-flex">
                  <div class="mr-4"><span class="icon icon-twitter"></span></div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere unde omnis veniam porro excepturi.</div>
                </li>
                <li class="d-flex">
                  <div class="mr-4"><span class="icon icon-twitter"></span></div>
                  <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere unde omnis veniam porro excepturi.</div>
                </li>
              </ul>
            </div>


            <div class="col-md-3 mb-4 mb-md-0">
              <h3>Instagram</h3>
              <div class="row gallery">
                <div class="col-6">
                  <a href="#"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                  <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                </div>
                <div class="col-6">
                  <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                  <a href="#"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
                </div>
              </div>
            </div>
            
            <div class="col-12">
              <div class="py-5 footer-menu-wrap d-md-flex align-items-center">
                <ul class="list-unstyled footer-menu mr-auto">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Our works</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contacts</a></li>
                </ul>
                <div class="site-logo-wrap ml-auto">
                  <a href="#" class="site-logo">
                    CPAC COPERATION
                  </a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </footer>
    

  </body>


</body>
</html>
