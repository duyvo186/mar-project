
<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.widgets.header')

</head>
@include('frontend.widgets.head')
  <body>


    <!-- END nav -->



    @include('frontend.widgets.menu')

    @yield('content')



    @include('frontend.widgets.footer')



  <!-- loader -->




  </body>
  @include('frontend.widgets.js')
</html>
