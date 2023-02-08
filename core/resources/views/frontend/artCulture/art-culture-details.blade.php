@extends('frontend.master')

@section('title')
    Art & Culture Details | History BD
@endsection

@section('content')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>ART & CULTURE OF BANGLADESH</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <div class="container">
        <div class="">
            <div class="text-center">
                <img src="{{ asset('assets/backend/images/place/'.$culture->image) }}" alt="">
            </div>
            <h2 class="text-center">{{ $culture->name }}</h2>
            <p class="text-justify pt-2 pb-2">{!! $culture->des !!}</p>
        </div>
    </div>
@endsection