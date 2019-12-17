<div class="row">

    <!-- Single Property Start -->
    @foreach($props as $prop)
        <div class="col-lg-4 col-md-6">
            <div class="property_item classical-list">
                <div class="listing-img-wrapper">
                    <div class="list-img-slide">
                        <div class="click">
                            @foreach($prop->pics as $pic)
                                <div><a href="#"><img src="{{ url($pic->url) }}" class="img-fluid mx-auto" alt="" /></a></div>
                            @endforeach
                        </div>
                    </div>
                    <span class="tag_t">Book</span>
                </div>
                <div class="proerty_content">
                    <div class="proerty_text">
                        <h3 class="captlize"><a href="#">{{ $prop->name }}</a></h3>
                    </div>
                    <p class="property_add">{{ $prop->located->name }}</p>
                    <div class="property_meta">
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                <span class="inc-fleat inc-bed">{{ $prop->bedroom }} Bedrooms</span>
                            </div>
                            <div class="listing-card-info-icon">
                                <span class="inc-fleat inc-type">{{ $prop->type }}</span>
                            </div>

                        </div>
                    </div>
                    <div class="property_links">
                        <a href="#" class="btn btn-theme">Request Info</a>
                        <a href="{{ route('property.info', $prop->unid) }}" class="btn btn-theme-light">Property Detail</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Single Property End -->





    <!-- Single Property Start -->
<!--
                <div class="col-lg-4 col-md-6">
                    <div class="property_item classical-list">
                        <div class="image">
                            <a href="single-property-3.html">
                                <img src="image-url-here" alt="latest property" class="img-fluid">
                            </a>
                            <div class="sb-date">
                                <span class="tag"><i class="ti-calendar"></i>4 days ago</span>
                            </div>
                            <span class="tag_t">For Rent</span>
                        </div>
                        <div class="proerty_content">
                            <div class="proerty_text">
                                <h3 class="captlize"><a href="single-property-3.html">Preet apartment</a></h3>
                                <p class="proerty_price">$17540</p>
                            </div>
                            <p class="property_add">302, Seek Velly Canada</p>
                            <div class="property_meta">
                                <div class="list-fx-features">
                                    <div class="listing-card-info-icon">
                                        <span class="inc-fleat inc-bed">2 Beds</span>
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <span class="inc-fleat inc-type">Houses</span>
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <span class="inc-fleat inc-area">1,580 sqft</span>
                                    </div>
                                    <div class="listing-card-info-icon">
                                        <span class="inc-fleat inc-bath">2 Bath</span>
                                    </div>
                                </div>
                            </div>
                            <div class="property_links">
                                <a href="single-property-3.html" class="btn btn-theme">Request Info</a>
                                <a href="single-property-3.html" class="btn btn-theme-light">Property Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                -->
    <!-- Single Property End -->

</div>