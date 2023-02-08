@extends('frontend.master')

@section('title')
    History Place Details | History BD
@endsection

@section('content')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>HISTORY OF BANGLADESH</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    
    <div class="container">
        <div class="">
            <div class="text-center">
                <img src="{{ asset('assets/backend/images/place/'.$history->image) }}" alt="">
            </div>
            <h2 class="text-center">{{ $history->name }}</h2>
            <p class="text-justify pt-2 pb-2">{!! $history->des !!}</p>
        </div>
    </div>
@endsection