<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
      <link rel="stylesheet" href="{{url('css/layout/adminlayout.css')}}">
      <title>Document</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid custom-navbar">
            <a class="navbar-brand" href="#">
            <img src="/images/webdesign/utemelearninglogo.png" alt="Your Logo" style="width: 200px; height: auto;"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
               <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                  <a class="nav-link" href="#">Features</a>
                  <a class="nav-link" href="#">Pricing</a>
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
               </div>
               <div class="dropdown ms-auto">
                  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->name }}
                  </a>  
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                     <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
                     <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item" type="submit">Log Out</button>
                     </form>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <!-- Sidebar -->
      <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse">
         <div class="position-sticky" >
            <div class="list-group list-group-flush mt-2" >
               <a href="#" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
               </i><span>Lecturer</span>
               </a>
               <a href="{{ route('admin.showcourses') }}" class="list-group-item list-group-item-action py-2 ripple">
               <span>Courses</span>
               </a>
            </div>
         </div>
      </nav>
      <!-- Sidebar -->
      <main>
         @yield('content') <!-- Inject content here -->
      </main>
   </body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>