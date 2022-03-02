
<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.widgets.head')

</head>

<body style="">

    @include('frontend.widgets.header')
    <!-- END nav -->



    @include('frontend.widgets.menu')


    @yield('content')



    @include('frontend.widgets.footer')


<!-- Messenger Plugin chat Code -->
{{-- <div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div> --}}

{{-- <script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "106021174256054");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v12.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script> --}}


  </body>
  @include('frontend.widgets.js')


</html>
