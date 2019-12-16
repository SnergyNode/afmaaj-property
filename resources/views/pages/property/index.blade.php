@extends('layouts.app')

@section('content')

    <style>
        span.tag_t {
            bottom: auto ;
            top: 10px;
        }
        .proerty_content {
            padding-top: 0;
        }
    </style>
    <section>

        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12 mb-5">
                    <h4>Afmaaj Properties</h4>
                </div>
            </div>

            {{--@include('pages.property.property')--}}
            @include('pages.property.property')

            <!-- Pagination -->
            <!--
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="pagination p-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span class="ti-arrow-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">18</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span class="ti-arrow-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            -->


        </div>

    </section>
@endsection

