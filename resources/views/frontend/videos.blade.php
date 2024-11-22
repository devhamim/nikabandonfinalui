@extends('frontend.layouts.app')
@section('content')
        
<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Page Header -->
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ asset('frontend') }}/assets/img/background/page-header-bg-13.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title ">Our Videos</h2>
        </div>
    </div>

    <!-- Our Services -->
    <section>
        <div class="container">
            @foreach ($videos as $video)
                {{-- <div class="wptb-video-player1 wow zoomIn" style="background-image: url('{{ asset('uploads/videos') }}/{{ $video->image }}');">
                    <div class="wptb-item--inner">
                        <div class="wptb-item--holder">
                            <div class="wptb-item--video-button">
                                <a class="btn" data-fancybox href="{{ $video->videolink }}">
                                    <span class="text-second"> <i class="bi bi-play-fill"></i> </span>
                                    <span class="line-video-animation line-video-1"></span> 
                                    <span class="line-video-animation line-video-2"></span> 
                                    <span class="line-video-animation line-video-3"></span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="wptb-item-layer wptb-item-layer-one">
                        <img src="{{ asset('frontend') }}/assets/img/more/light-3.png" alt="img">
                    </div>
                </div> --}}
               <div class="py-3">
                    {!! $video->videolink !!}
               </div>
            @endforeach
        </div>
    </section>

</main>
@endsection