 <!-- header section start -->
 <div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                        </li>
                       
                        <li class="nav-item">
                           <a class="nav-link " href="blog.html">Blog</a>
                        </li>

                        @if (Route::has('login'))
                     @auth
                     <li><x-app-layout></x-app-layout></li>


                     @else
                     <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Login</a></li>
                     <li class="nav-item"><a href="{{route('register')}}" class="nav-link">Register</a></li>

                     @endauth
                     @endif
                        
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="index.html">Home</a></li>
                     <li><a href="about.html">About</a></li>
                     <li><a href="blog.html">Blog</a></li>

                     @if (Route::has('login'))
                     @auth
                     <li><x-app-layout></x-app-layout></li>
                     <li><a href={{url('create_post')}}>Add Post</a></li>

                     @else
                     <li><a href="{{route('login')}}">Login</a></li>
                     <li><a href="{{route('register')}}">Register</a></li>

                     @endauth
                     @endif
                  </ul>
               </div>
            </div>
         </div>
        
      </div>
      <!-- header section end -->