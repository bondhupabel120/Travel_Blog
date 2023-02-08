@extends('frontend.master')

@section('title')
    Map of Bangladesh | History BD
@endsection

@section('content')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>MAP OF BANGLADESH</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="m-auto">
                <img src="{{ asset('assets/frontend/images/map.jpg') }}" alt="map of bangladesh">
            </div>
        </div>
    </div>
@endsection