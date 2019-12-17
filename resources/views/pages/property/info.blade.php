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
    @include('pages.property.property_info')
@endsection

