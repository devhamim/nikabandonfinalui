@extends('frontend.layouts.app')
@section('content')
<!-- Main Wrapper-->
<main class="wrapper">
    <!-- Page Header -->
    <div class="wptb-page-heading">
        <div class="wptb-item--inner" style="background-image: url('{{ asset('uploads/storie') }}/{{ $stores->image }}');">
            <div class="wptb-item-layer wptb-item-layer-one">
                <img src="{{ asset('frontend') }}/assets/img/more/circle.png" alt="img">
            </div>
            <h2 class="wptb-item--title ">Stories Details</h2>
        </div>
    </div>
    
    <!-- Details Content -->
    <section class="blog-details">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="blog-details-inner">
                        <div class="post-content">
                            <div class="post-header">
                                <h2 class="post-title">{{ $stores->title }}</h2>
                            </div>

                            <div class="intro">
                                <p>{{ $stores->description }}</p>
                            </div>
                            <style>
                                .gallery {
                                    display: grid;
                                    grid-template-columns: repeat(2, 1fr); /* Two equal-width columns */
                                    gap: 1px; /* Small gap between images */
                                }
                                .gallery-item {
                                    display: flex;
                                }

                                .gallery-item img {
                                    width: 100%;
                                    height: auto;
                                    display: block;
                                    object-fit: cover;
                                }
                            </style>
                            <div class="gallery-container">
                                @if(!empty($galleryImages))
                                    <div class="gallery">
                                        @foreach($galleryImages as $image)
                                            <div class="gallery-item">
                                                <img src="{{ asset('uploads/storie/gallery/' . $image) }}" alt="Gallery Image">
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>                            
                            
                            {{-- <div class="fulltext">
                                

                                <div class="post-footer">
                                    <div class="post-share">
                                        <ul class="share-list">
                                            <li>Share:</li>
                                            <li class="facebook"><a href="#">Facebook</a></li>
                                            <li class="twitter"><a href="#">Twitter</a></li>
                                            <li class="pinterest"><a href="#">Pinterest</a></li>
                                            <li class="instagram"><a href="#">Instagram</a></li>
                                            <li class="linkedin"><a href="#">Linkedin</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Comment List -->
                                <div class="comments-area">
                                    <h3 class="comments-title">Comments</h3>
                                    <ul class="comment-list">
                                        <li class="comment even thread-even depth-1">
                                            <div class="commenter-block">
                                                <div class="comment-avatar">
                                                    <img alt="img" src="{{ asset('frontend') }}/assets/img/blog/commenter-1.jpg" class="avatar">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-author-name">Barret Simpson <span class="comment-date">January 29, 2023</span></div>
                                                    <div class="comment-author-comment">
                                                        <p>Lorem ipsum dolor sit amet, consectetur. Ut enim ad minima veniam quis nostrum exercitationem mosequatu autem.</p>
                                                        <span class="comment-reply"><a href="#" class="comment-reply-link">Reply</a></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="children">
                                                <li class="comment even thread-even depth-2">
                                                    <div class="commenter-block">
                                                        <div class="comment-avatar">
                                                            <img alt="img" src="{{ asset('frontend') }}/assets/img/blog/commenter-2.jpg" class="avatar">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-author-name">Parker Ballinger <span class="comment-date">January 22, 2023</span></div>
                                                            <div class="comment-author-comment">
                                                                <p>Lorem ipsum dolor sit amet, consectetur. Ut enim ad minima veniam quis nostrum exercitationem mosequatu autem.</p>
                                                                <span class="comment-reply"><a href="#" class="comment-reply-link">Reply</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li><!-- #comment-## -->
                                            </ul><!-- .children -->
                                        </li><!-- #comment-## -->
                                        <li class="comment odd thread-odd depth-1">
                                            <div class="commenter-block">
                                                <div class="comment-avatar">
                                                    <img alt="img" src="{{ asset('frontend') }}/assets/img/blog/commenter-1.jpg" class="avatar">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-author-name">Barret Simpson <span class="comment-date">January 01, 2023</span></div>
                                                    <div class="comment-author-comment">
                                                        <p>Lorem ipsum dolor sit amet, consectetur. Ut enim ad minima veniam quis nostrum exercitationem mosequatu autem.</p>
                                                        <span class="comment-reply"><a href="#" class="comment-reply-link">Reply</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- #comment-## -->
                                    </ul>
                                    <div class="wptb-pagination-wrap">
                                        <ul class="pagination mt-0 justify-content-start">
                                            <li><span class="page-number current">1</span></li>
                                            <li><a class="page-number" href="#">2</a></li>
                                            <li>.....</li>
                                            <li><a class="page-number" href="#">5</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Make A Comment</h3>
                                    <form class="comment-form" action="https://wpthemebooster.com/demo/themeforest/html/kimono/light/register.php" method="post">
                                        <p class="logged-in-as">Your email address will not be published. Required fields are marked *</p>
                                        <div class="form-container">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" placeholder="Name*" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" placeholder="Text Here*" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-lg-12">
                                                    <div class="wptb-item--button"> 
                                                        <button type="submit" class="btn"> 
                                                            <span class="btn-wrap">
                                                                <span class="text-first">Make Comment</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- End Details Content -->
    
</main>
@endsection      