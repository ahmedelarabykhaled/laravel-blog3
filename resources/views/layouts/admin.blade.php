<html>
  <head>

    <title>Dashboard</title>
    <link rel="icon" type="image" href="{{url('images/admin.png')}}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main resources/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main resources/fontawesome.min.css') }}">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{ url('admin/styles/shards-dashboards.1.1.0.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/styles/extras.1.1.0.min.css') }}">
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
    <style type="text/css">
    body
      {
        overflow-x: hidden;
      }
      @yield('style');
    </style>
  </head>
  <body class="h-100">


@yield('test_active')



    <div class="container-fluid">
      <div class="row">
        <!-- Main Left Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="{{url('admin/images/shards-dashboards-logo.svg')}}" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">Shards Dashboard</span>
                </div>
              </a>
              
            </nav>
          </div>       
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link {{session('dashboard')}}" href="{{url('admin/dashboard')}}">
                  <span>Blog Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{session('posts')}}" href="{{url('admin/posts')}}">
                  <span>Blog Posts</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{session('comments')}}" href="{{url('admin/comments')}}">
                  <span>Blog Comments</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{session('users')}}" href="{{url('admin/users')}}">
                  <span>Users</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{session('admins')}}" href="{{url('admin/admins')}}">
                  <span>Admins</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{session('categories')}}" href="{{url('admin/categories')}}">
                  <span>Categories</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{session('profile')}}" href="{{url('admin/admins',Auth::guard('admin')->user()->id)}}">
                  <span>Admin Profile</span>
                </a>
              </li>
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">


            <!-- Main Top Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <div action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">        
              </div>
              <ul class="navbar-nav border-left flex-row ">
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    
                    @if(Auth::guard('admin')->user()->image != null)
                      <img class="user-avatar rounded-circle mr-2" src="{{url('admins',Auth::guard('admin')->user()->image->image_name)}}" alt="User Avatar">
                    @else
                      <img class="user-avatar rounded-circle mr-2" src="{{url('images/no admin.png')}}" alt="User Avatar">
                    @endif
                    <span class="d-none d-md-inline-block">{{Auth::guard('admin')->user()->name}}</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="{{url('admin/admins',Auth::guard('admin')->user()->id)}}">
                      My Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{url('admin/logout')}}">
                      Logout 
                    </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>


          </div>
          <!-- / .main-navbar -->



          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Dashboard</span>
                <h3 class="page-title">@yield('title')</h3>
              </div>
            </div>



            <div class="row">

              <!-- my custom user -->              
              <!-- <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                <div class="card card-small">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Users</h6>
                  </div>
                  <div class="card-body pt-0">
                    <div class="row border-bottom py-2 bg-light">
                      <div class="col-12 col-sm-6">
                        general details
                      </div>
                    </div>
                    <canvas height="230" style="max-width: 100% !important;"></canvas>
                  </div>
                </div>
              </div> -->
              <!-- end my custom user -->
              @yield('content')




              <!-- End Users Stats -->
              <!-- Users By Device Stats -->
              <!-- <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card card-small h-100">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Users by device</h6>
                  </div>
                  <div class="card-body d-flex py-0">
                    <canvas height="220" class="blog-users-by-device m-auto"></canvas>
                  </div>
                  <div class="card-footer border-top">
                    <div class="row">
                      <div class="col">
                        <select class="custom-select custom-select-sm" style="max-width: 130px;">
                          <option selected>Last Week</option>
                          <option value="1">Today</option>
                          <option value="2">Last Month</option>
                          <option value="3">Last Year</option>
                        </select>
                      </div>
                      <div class="col text-right view-report">
                        <a href="#">Full report &rarr;</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- End Users By Device Stats -->
              <!-- New Draft Component -->
              <!-- <div class="col-lg-4 col-md-6 col-sm-12 mb-4"> -->
                <!-- Quick Post -->
                <!-- <div class="card card-small h-100">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">New Draft</h6>
                  </div>
                  <div class="card-body d-flex flex-column">
                    <form class="quick-post-form">
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Brave New World"> </div>
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Words can be like X-rays if you use them properly..."></textarea>
                      </div>
                      <div class="form-group mb-0">
                        <button type="submit" class="btn btn-accent">Create Draft</button>
                      </div>
                    </form>
                  </div>
                </div> -->
                <!-- End Quick Post -->
              <!-- </div> -->
              <!-- End New Draft Component -->
              <!-- Discussions Component -->
              <!-- <div class="col-lg-5 col-md-12 col-sm-12 mb-4">
                <div class="card card-small blog-comments">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Discussions</h6>
                  </div>
                  <div class="card-body p-0">
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3">
                        <img src="images/avatars/1.jpg" alt="User avatar" /> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#">James Johnson</a> on
                          <a class="text-secondary" href="#">Hello World!</a>
                          <span class="text-muted">– 3 days ago</span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted">Well, the way they make shows is, they make one show ...</p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Approve </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Reject </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-light">
                                <i class="material-icons">more_vert</i>
                              </span> Edit </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3">
                        <img src="images/avatars/2.jpg" alt="User avatar" /> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#">James Johnson</a> on
                          <a class="text-secondary" href="#">Hello World!</a>
                          <span class="text-muted">– 4 days ago</span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted">After the avalanche, it took us a week to climb out. Now...</p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Approve </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Reject </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-light">
                                <i class="material-icons">more_vert</i>
                              </span> Edit </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3">
                        <img src="images/avatars/3.jpg" alt="User avatar" /> </div>
                      <div class="blog-comments__content">
                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#">James Johnson</a> on
                          <a class="text-secondary" href="#">Hello World!</a>
                          <span class="text-muted">– 5 days ago</span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted">My money's in that office, right? If she start giving me...</p>
                        <div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Approve </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Reject </button>
                            <button type="button" class="btn btn-white">
                              <span class="text-light">
                                <i class="material-icons">more_vert</i>
                              </span> Edit </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer border-top">
                    <div class="row">
                      <div class="col text-center view-report">
                        <button type="submit" class="btn btn-white">View All Comments</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- End Discussions Component -->
              <!-- Top Referrals Component -->
              <!-- <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                <div class="card card-small">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Top Referrals</h6>
                  </div>
                  <div class="card-body p-0">
                    <ul class="list-group list-group-small list-group-flush">
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">GitHub</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">19,291</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Stack Overflow</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">11,201</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Hacker News</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">9,291</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Reddit</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">8,281</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">The Next Web</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">7,128</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Tech Crunch</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">6,218</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">YouTube</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">1,218</span>
                      </li>
                      <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Adobe</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">827</span>
                      </li>
                    </ul>
                  </div>
                  <div class="card-footer border-top">
                    <div class="row">
                      <div class="col">
                        <select class="custom-select custom-select-sm">
                          <option selected>Last Week</option>
                          <option value="1">Today</option>
                          <option value="2">Last Month</option>
                          <option value="3">Last Year</option>
                        </select>
                      </div>
                      <div class="col text-right view-report">
                        <a href="#">Full report &rarr;</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- End Top Referrals Component -->
            </div>
          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
            </ul>
            <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
              <a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
            </span>
          </footer>
        </main>
      </div>
    </div>
    


    <script type="text/javascript" src="{{ url('js/main resources/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/main resources/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/main resources/bootstrap.min.js') }}"></script>
    <script src="{{ url('admin/scripts/extras.1.1.0.min.js') }}"></script>
    <script src="{{ url('admin/scripts/shards-dashboards.1.1.0.min.js') }}"></script>
    <script src="{{ url('admin/scripts/app/app-blog-overview.1.1.0.js') }}"></script>
    <script type="text/javascript">
      @yield('js');
    </script>
  </body>
</html>