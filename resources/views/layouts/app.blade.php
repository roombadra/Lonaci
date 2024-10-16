<!DOCTYPE html>
<html>
 @include('layouts.head')
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
  
  <div class="page-wrapper">

    <!-- top bar navigation -->
        @include('layouts.header')
    <!-- End Navigation --> 
           
    <div class="page-container">
        <!-- Left Sidebar -->
            @include('layouts.sidebar')
        <!-- End Sidebar -->
        
         @yield('content')
    </div>
@include('layouts.footer')
  </div>
</body>


<!-- Mirrored from demo.bootstrap24.com/nura-admin-4/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Sep 2021 08:34:15 GMT -->
</html>