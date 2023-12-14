@extends('layouts.app')

@section('content')
    <!-- page header -->
    @include('partials.header')

    <!-- about section -->
    @include('partials.about')

    <!-- skill section -->
    @include('partials.skill')

    <!-- project section -->
    @include('partials.project')

    <!-- testimonial section -->
    @include('partials.testimonial')

    <!-- contact section -->
    @include('partials.contact')
@endsection
