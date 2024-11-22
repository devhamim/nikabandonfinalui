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
    <link href="{{ asset('frontend') }}/css/index.min.css" rel="stylesheet" />
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
    <style type="text/css">
        /* Timeline Container */
        .timeline {
            background: var(--primary-color);
            margin: 20px auto;
            padding: 20px;
        }

        /* Outer Layer with the timeline border */
        .outer {
            border-left: 2px solid #333;
        }

        /* Card container */
        .card {
            position: relative;
            margin: 0 0 20px 20px;
            padding: 10px;            
            color: gray;
            border-radius: 8px;
            max-width: 400px;
        }

        /* Information about the timeline */
        .info {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* Title of the card */
        .timeline .title {
            color: #444;
            position: relative;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 5px;
        }

            /* Timeline dot  */
            .title::before {
                content: "";
                position: absolute;
                width: 13px;
                height: 13px;
                background: white;
                border-radius: 999px;
                left: -39px;
                border: 3px solid orangered;
            }
        .home-big-icon img{
            width: 60px;
        }
    </style>
</head>

<body>
    <div>
         <!-- Main Header -->
         @include('frontend.layouts.header')
        
         <!-- Main Wrapper-->
         @yield('content')
 
         <!-- Footer -->
         @include('frontend.layouts.footer')

        

        <span id="return-to-top" style="display: inline;"><img src="{{ asset('frontend') }}/images/icon/long-arrow-up.svg" title="Go up" alt="Arrow"></span>
    </div>

    <script src="{{ asset('frontend') }}/js/index.min.js"></script>

</body>
</html>
