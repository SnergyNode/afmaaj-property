@extends('layouts.app')

@section('content')
    @include('pages.components.slider')

    @include('pages.home.howTo')

    @include('pages.home.findByLocation')

    @include('pages.home.property')

    @include('pages.home.topPlace')

    {{--@include('pages.home.blog')--}}

@endsection
