<div class="home-slider margin-bottom-0">

    <!-- Slide -->
    @foreach($banners as $banner)
        <div data-background-image="{{ $banner['jpg'] }}" class="item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home-slider-container">

                            <!-- Slide Title -->
                            <div class="home-slider-desc">

                                <!--<div class="home-slider-price">
                                    NGN 21.2M
                                </div>
                                -->

                                <div class="home-slider-title">
                                    <h3><a href="#">Afmaaj Estate</a></h3>
                                    <span><i class="lni-map-marker"></i> 778 Country St. F C T Abuja, Nigeria</span>
                                </div>

                                <a href="#" class="btn btn-theme-2">View Details <i class="fa fa-angle-right"></i></a>

                            </div>
                            <!-- Slide Title / End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



</div>