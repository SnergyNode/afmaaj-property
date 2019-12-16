<section>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="sec-heading center">
                    <h2>Amazing Properties Book</h2>
                    <p>Find new & featured property for you.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Property -->
            @foreach($props as $prop)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="property-listing property-2">

                        <div class="listing-img-wrapper">
                            <div class="list-img-slide">
                                <div class="click">
                                    <div>
                                        <a href="#"><img src="{{ url($prop->single_pic()) }}" class="img-fluid mx-auto" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <!--
                                <div class="listing-price">
                                    <h4 class="list-pr">N 25 M</h4>
                                </div>
                            -->
                            <span class="property-type">Book</span>
                        </div>

                        <div class="listing-detail-wrapper pb-0">
                            <div class="listing-short-detail">
                                <h4 class="listing-name"><a href="#">{{ $prop->name }}</a><i class="list-status ti-check"></i></h4>
                            </div>
                        </div>

                        <div class="price-features-wrapper">
                            <!--
                            <div class="listing-price-fx">
                                <h6 class="listing-card-info-price ">NGN 26 M<span class="price-suffix"> </span></h6>
                            </div>
                            <div class="list-fx-features">
                                <div class="listing-card-info-icon">
                                    <span class="inc-fleat inc-bed">3 Bedroom</span>
                                </div>
                                <div class="listing-card-info-icon">
                                    <span class="inc-fleat inc-bath">3 Bathrooms</span>
                                </div>
                            </div>
                            -->
                        </div>

                    </div>
                </div>
            @endforeach


        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="text-center mt-4">
                    <a href="{{ route('property') }}" class="btn btn-theme-2">Browse More Property</a>
                </div>
            </div>
        </div>

    </div>
</section>