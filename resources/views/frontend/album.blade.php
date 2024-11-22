@extends('frontend.layouts.app')
@section('content')
<!-- Main Wrapper-->
<main class="wrapper">
    <div class="wptb-page-heading" style="padding: 0">
        <div class="wptb-item--inner" style="background: hsla(0, 0%, 0%, 0.8); padding: 50px">
            {{-- <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title ">Album</h2> --}}
        </div>
    </div>

    <section class="wptb-shop ">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-9 col-md-8 pe-md-5">
                    <div class="shop_filtering_method d-flex align-items-center flex-wrap">
                        <div class="view_type_wrapper d-flex align-items-center">
                            <ul class="nav view_type d-flex align-items-center">
                                <li>
                                    <a class="icon-grid active" id="grid-tab" data-bs-toggle="tab" href="#grid"><i class="bi bi-grid-3x3-gap-fill"></i></a>
                                </li>
                                <li>
                                    <a class="icon-list" id="list-tab" data-bs-toggle="tab" href="#list"><i class="bi bi-list-task"></i></a>
                                </li>
                            </ul>
                            <div class="showing_results">
                                Showing {{ $albums_count }} results
                            </div>
                        </div>
                        {{-- <div class="sorting_wrapper">
                            <div class="sorting_select">
                                <select class="basic_select" id="sorting">
                                    <option value="0">Default Sorting</option>
                                    <option value="1">Title</option>
                                    <option value="2">Price: Low to High</option>
                                    <option value="3">Price: High to Low</option>
                                    <option value="4">Popular</option>
                                </select>
                            </div>
                        </div> --}}
                    </div>
                    
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                            <div class="product_view_grid product_col_2">
                                @foreach($albums as $album)
                                    <div class="product_item">
                                        <div class="product_thumb">
                                            <div class="product_imagebox">
                                                    <img class="primary_img" src="{{ asset('uploads/album') }}/{{ $album->image }}" alt="img">
                                                    <div class="cart_button">
                                                        <a href="{{ route('albums.details', $album->slug) }}" class="btn">
                                                            View 
                                                        </a>
                                                    </div> 
                                            </div>
                                            <div class="product_item_inner">
                                                <div class="label_text">
                                                    <h2 class="product_item_name d-flex align-items-center justify-content-between gap-1 flex-wrap">
                                                        <a href="{{ route('albums.details', $album->slug) }}">{{ $album->title }}</a>
                                                        <strong class="">${{ $album->price }}</strong>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                            <div class="wptb-pagination-wrap text-center">
                                {{ $albums->links() }}
                            </div>
                        </div>

                        <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="list-tab">
                            <!-- Product List View -->
                            <div class="product_view_list">
                                @foreach($albums as $album)
                                <div class="product_item">
                                    <div class="product_thumb">
                                        <div class="product_imagebox">
                                            
                                            <img class="primary_img" src="{{ asset('uploads/album') }}/{{ $album->image }}" alt="img">
                                        </div>
                                        <div class="product_item_inner">
                                            <div class="label_text">
                                                <h2 class="product_item_name d-flex align-items-center justify-content-between gap-1 flex-wrap">
                                                    <a href="{{ route('albums.details', $album->slug) }}">{{ $album->title }}</a>
                                                </h2>

                                                <div class="product_item_price">${{ $album->price }}</div>
                                                <div class="cart_button">
                                                    <a href="{{ route('albums.details', $album->slug) }}" class="btn">
                                                        View 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            <div class="wptb-pagination-wrap text-center">
                                {{ $albums->links() }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar  -->
                <div class="col-lg-3 col-md-4 p-0 mt-5 mt-md-0">
                    <div class="shop_sidebar">
                       
                        <div class="widget">
                            <h2 class="widget-title">Categories</h2>
                            <ul class="wp-block-categories-list wp-block-categories">
                                @foreach($categories as $category) 
                                    <li class="cat-item">
                                        <a href="{{ route('albums', ['category' => $category->category]) }}">{{ $category->category }}</a>
                                        <i class="bi bi-chevron-right"></i>
                                    </li>
                                @endforeach
                            </ul>
                        </div>                        

                        <div class="widget">
                            <h2 class="widget-title">
                                Popular Products
                            </h2>
                            
                            <div class="products-list">
                                <ul class="popular_product_list">
                                    @foreach($albums as $album)
                                        <li class="popular_product_item">
                                            <div class="popular_product_image">
                                                <img class="primary_img" src="{{ asset('uploads/album') }}/{{ $album->image }}" alt="">
                                            </div>
                                            <div class="popular_product_content">
                                                <h5 class="product_title"><a href="{{ route('albums.details', $album->slug) }}">{{ $album->title }}</a></h5>
                                                <h6 class="product_price">${{ $album->price }}</h6>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection