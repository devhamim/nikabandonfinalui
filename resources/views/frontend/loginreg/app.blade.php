<!DOCTYPE html>

<html lang="en">
<head>
    @if ($setting->first()->title != null)
        <title>{{ $setting->first()->title }}</title>
    @endif
    @if ($setting->first()->favicon != null)
        <link rel="shortcut icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif
    <!-- Meta Tags -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&amp;display=swap" rel="stylesheet" media="print" onload="if(media!='all')media='all'">

    <link href="{{ asset('frontend') }}/css/site.min.css" rel="stylesheet" />
        
    <!--SignalR needed-->
    <link href="{{ asset('frontend') }}/css/chat-style6de2.css?v=010219" rel="stylesheet" />
    <link href="{{ asset('frontend') }}/css/JqueryUI/themes/base/jquery.ui.all.css" rel="stylesheet" />
    <script type="text/javascript">

        // Call for mobile version (Navigation Drawer). For desktop viersion its called from _Layout_MyPage.cshtml
        $(document).ready(function () {
            if ($(window).width() < 768) {

                var userStatus = getUserStatus();
                if (userStatus && userStatus.isLoggedIn) {
                    getBasicInfo();
                }

                collapseLeftMenuAreas();
            }
        });

        function openSideDrawer() {
            $(".side-drawer").css('left', 0);
            $(".side-drawer-void").addClass("d-block");
            $(".side-drawer-void").removeClass("d-none");
        }

        function closeSideDrawer() {
            $(".side-drawer").css('left', -300);
            $(".side-drawer-void").addClass("d-none");
            $(".side-drawer-void").removeClass("d-block");
        }
    </script>
            <!-- Meta Pixel Code -->
         @if ($setting->first()->fb_pixel != null)
            {!! $setting->first()->fb_pixel !!}
        @endif
        <!-- End Meta Pixel Code -->
    
        <!-- googletag Code -->
        @if ($setting->first()->google_tag != null)
            {!! $setting->first()->google_tag !!}
        @endif
        <!-- End googletag Code -->
    <style>
        .video-box img{
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="container" class="boxed-page-NONE site-transparent-back">
         <!-- Main Header -->
         @include('frontend.loginreg.header')
        
         <!-- Main Wrapper-->
         @yield('content')
 
         <!-- Footer -->
         @include('frontend.layouts.footer')

        

        <span id="return-to-top" style="display: inline;"><img src="{{ asset('frontend') }}/images/icon/long-arrow-up.svg" title="Go up" alt="Arrow"></span>
    </div>

        <!--JS framework-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('frontend') }}/js/site-framework.min.js"></script>
        <script src="{{ asset('frontend') }}/js/site-library.min.js"></script>
        <script src="{{ asset('frontend') }}/js/site.min.js"></script>
    

</body>
</html>
