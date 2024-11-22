@extends('frontend.layouts.app')
@section('content')
        
<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Page Header -->
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ asset('frontend') }}/assets/img/background/page-header-bg-8.jpg');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title ">Our Gallery</h2>
        </div>
    </div>

    <!-- Our Services -->
    <section>
        <div class="container">
            <div class="wptb-project--inner">
                <div class="wptb-heading">
                    <div class="wptb-item--inner text-center">
                        <h6 class="wptb-item--subtitle">Our Gallery</h6>
                        <h1 class="wptb-item--title"> Our captures <span>All of Your</span> <br>
                            beautiful memories</h1>
                    </div>
                </div>

                <div class="effect-fly">
                    <div class="grid grid-3 gutter-30 clearfix"> 
                        <div class="grid-sizer"></div> 
                        @foreach ($categorys as $category)                         
                            <div class="grid-item">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image">
                                        <img src="{{asset('uploads/category')}}/{{ $category->image }}" alt="img">
                                    </div>

                                    @if($category->name != null)
                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a>{{Str::limit($category->name, '25', '')}}</a></h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div> 
                        @endforeach 
                    </div>
                </div>
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