<!-- ============================ Property Detail Start ================================== -->
<section class="gray">
    <div class="container">

        <div class="row">
            <div class="col-md-12 col-sm-12 mb-5">
                <h2 class="text-center">{{ $prop->type .' Information' }}</h2>
            </div>
        </div>

        <div class="row">

            <!-- property main detail -->
            <div class="col-lg-8 col-md-12 col-sm-12">

                <div class="slide-property-first mb-4">
                    <div class="pr-price-into">
                        {{--<h2>$1700 <i>/ monthly</i> <span class="prt-type rent">For Rental</span></h2>--}}
                        <h2>{{ $prop->name }}</h2>
                        <span><i class="lni-map-marker"></i>{{ $prop->located->name }}</span>
                    </div>
                </div>

                <div class="property3-slide single-advance-property mb-4">

                    <div class="slider-for">
                        @foreach($prop->pics as $pic)
                            <a href="{{ url($pic->url) }}" class="item-slick"><img src="{{ url($pic->url) }}" alt="Alt"></a>
                        @endforeach

                    </div>
                    <div class="slider-nav">
                        @foreach($prop->pics as $pic)
                            <div class="item-slick"><img src="{{ url($pic->url) }}" alt="Alt"></div>
                        @endforeach



                    </div>

                </div>

                <!-- Single Block Wrap -->
                <div class="block-wrap">

                    <div class="block-header">
                        <h4 class="block-title">Property Info</h4>
                    </div>

                    <div class="block-body">
                        <ul class="dw-proprty-info">
                            <li><strong>Bedrooms</strong>{{ $prop->bedroom }}</li>
                            <li><strong>Bathrooms</strong>{{ $prop->toilet }}</li>
                            {{--<li><strong>Garage</strong>Yes</li>--}}
                            {{--<li><strong>Area</strong>570 sq ft</li>--}}
                            <li><strong>Type</strong>{{ $prop->type }}</li>
                            <li><strong>Price</strong>{{ !empty($prop->price)?$prop->price:'Contact Us' }}</li>
                            <li><strong>City</strong>{{ $prop->located->name }}</li>
                            {{--<li><strong>Build On</strong>2007</li>--}}
                        </ul>
                    </div>

                </div>

                <!-- Single Block Wrap -->
                <div class="block-wrap">

                    <div class="block-header">
                        <h4 class="block-title">Description</h4>
                    </div>

                    <div class="block-body">
                        <p>{{ $prop->info }}</p>
                    </div>

                </div>

                <!-- Single Block Wrap -->
                {{--@include('pages.property.amenities')--}}

                <!-- Single Block Wrap -->

                {{--@include('pages.property.floorplan')--}}





            </div>

            <!-- property Sidebar -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="page-sidebar" style="padding-top: 80px">

                    <!-- Agent Detail -->

                    {{--@include('pages.property.agent')--}}

                    <!-- Find New Property -->

                    {{--@include('pages.property.finder')--}}

                    @include('pages.property.featured')

                </div>
            </div>

        </div>
    </div>
</section>
<!-- ============================ Property Detail End ================================== -->