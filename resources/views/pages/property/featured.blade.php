<!-- Featured Property -->
<div class="sidebar-widgets">

    <h4>Featured Property</h4>

    <div class="sidebar-property-slide">

        @foreach($properties as $prop)
            <!-- Single Property -->
            <div class="single-items">
                    <div class="property-listing property-1">

                        <div class="listing-img-wrapper">
                            <a href="{{ route('property.info', $prop->unid) }}">
                                <img src="{{ url($prop->single_pic()) }}" class="img-fluid mx-auto" alt="" />
                            </a>

                            <span class="property-type">Book</span>
                        </div>

                        <div class="listing-content">

                            <div class="listing-detail-wrapper">
                                <div class="listing-short-detail">
                                    <h4 class="listing-name">{{ $prop->name }}</h4>
                                    <span class="listing-location"><i class="ti-location-pin"></i>{{ $prop->located->name }}</span>
                                </div>
                                <div class="list-author">
                                    <a href="#"><img src="{{ url('img/logo.png') }}" class="img-fluid img-circle avater-30" alt=""></a>
                                </div>
                            </div>

                            <div class="listing-features-info">
                                <ul>
                                    <li><strong>Bed:</strong>{{ $prop->bedroom }}</li>
                                    <li><strong>Bath:</strong>{{ $prop->toilet }}</li>
                                    <li><strong>Type:</strong>{{ $prop->type }}</li>
                                </ul>
                            </div>

                            <div class="listing-footer-wrapper">
                                <div class="listing-price">
                                    <h4 class="list-pr">{{ $prop->price }}</h4>
                                </div>
                                <div class="listing-detail-btn">
                                    <a href="{{ route('property.info', $prop->unid) }}" class="more-btn">More Info</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
        @endforeach


    </div>

</div>