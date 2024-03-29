<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Superio | Best Job Listings in Tanzania</title>
  <!-- Stylesheets -->
   <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Include favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body data-anm=".anm">
  <div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Main Header-->
        @if(!in_array(Route::currentRouteName(), ['register', 'login']))
            @include('partials._header')
        @endif
    <!--End Main Header -->
    <main>
      @yield('content')
    </main>
    <!-- Main Footer -->
    @if(!in_array(Route::currentRouteName(), ['dashboard', 'register', 'login']))
      <footer>
          @include('partials._footer')
      </footer>
    @endif
    <!-- End Main Footer -->
  </div>
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/popper.min.js') }}" defer></script>
    <script src="{{ asset('js/chosen.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}" defer></script>
    <script src="{{ asset('js/jquery.modal.min.js') }}" defer></script>
    <script src="{{ asset('js/mmenu.polyfills.js') }}" defer></script>
    <script src="{{ asset('js/mmenu.js') }}" defer></script>
    <script src="{{ asset('js/appear.js') }}" defer></script>
    <script src="{{ asset('js/anm.min.js') }}" defer></script>
    <script src="{{ asset('js/ScrollMagic.min.js') }}" defer></script>
    <script src="{{ asset('js/rellax.min.js') }}" defer></script>
    <script src="{{ asset('js/owl.js') }}" defer></script>
    <script src="{{ asset('js/wow.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

 <script type="text/javascript">
     jQuery('.call-modal').on('click', function(event) {
         event.preventDefault();
         this.blur();
 
         var isLogin = jQuery(this).hasClass('login');
         var popupUrl = isLogin ? '/login' : '/register';
 
         jQuery.get(popupUrl, function(html) {
             var $popup = jQuery(html).appendTo('body').modal({
                 fadeDuration: 300,
                 fadeDelay: 0.15
             });
 
             // Check for error messages within the popup
             var $errorMessages = $popup.find('.text-red-500');
 
             // If there are error messages, prevent the popup from closing
             if ($errorMessages.length > 0) {
                 $popup.modal('lock');
             }
         });
     });


      jQuery('.call-modal').on('click', function(event) {
            event.preventDefault();
            this.blur();
    
            var isLogin = jQuery(this).hasClass('apply');
            var popupUrl = '/apply' 
    
            jQuery.get(popupUrl, function(html) {
                var $popup = jQuery(html).appendTo('body').modal({
                    fadeDuration: 300,
                    fadeDelay: 0.15
                });
    
                var $errorMessages = $popup.find('.text-red-500');
                // If there are error messages, prevent the popup from closing
                if ($errorMessages.length > 0) {
                    $popup.modal('lock');
                }
            });
        });



        function smoothScroll(event) {
        event.preventDefault();
        const targetId = event.target.getAttribute('href').substr(1);
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
            const start = window.pageYOffset;
            const end = targetElement.offsetTop;
            const distance = end - start;
            const duration = 2000;
            let startTime = null;

            function animate(currentTime) {
                if (startTime === null) startTime = currentTime;
                const timeElapsed = currentTime - startTime;
                const easing = (t) => t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
                const scrollTo = easing(Math.min(timeElapsed / duration, 1)) * distance + start;
                window.scrollTo(0, scrollTo);
                if (timeElapsed < duration) requestAnimationFrame(animate);
            }

            requestAnimationFrame(animate);
        }
    }

 </script>
 
  
</body>
</html>