@extends('frontend.layouts.app')
@section('content')
<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Page Header -->
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ asset('frontend') }}/assets/img/background/page-header-bg-6.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title ">Stories</h2>
        </div>
    </div>

    <!-- Blog Grid -->
    <section class="wptb-blog-grid-one">
        <div class="container">
            
            <div class="row">
                @foreach ($stores as $store)
                    <div class="col-lg-6 col-sm-6">
                        <div class="wptb-blog-grid1 active highlight wow fadeInLeft">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image">
                                    <a href="{{ route('stories.details',$store->slug ) }}" class="wptb-item-link">
                                        <img src="{{ asset('uploads/storie') }}/{{ $store->image }}" alt="img">
                                    </a>
                                </div>
                                <div class="wptb-item--holder">
                                    <h4 class="wptb-item--title"><a href="{{ route('stories.details',$store->slug ) }}">{{ $store->title }}</a></h4>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>

            {{-- <div class="wptb-pagination-wrap text-center">
                <ul class="pagination">
                    <li><a class="disabled page-number previous" href="#"><i class="bi bi-chevron-left"></i></a></li>
                    <li><span class="page-number current">1</span></li>
                    <li><a class="page-number" href="#">2</a></li>
                    <li><a class="page-number" href="#">3</a></li>
                    <li>.....</li>
                    <li><a class="page-number" href="#">9</a></li>
                    <li><a class="page-number next" href="#"><i class="bi bi-chevron-right"></i></a></li>
                </ul>
            </div> --}}
        </div>
    </section>

</main>
@endsection      