@extends('frontend.master')

@section('title')
    Art & Culture | History BD
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

    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Art & Culture of Bangladesh</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    @foreach($cultures as $culture)
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <a href="{{ route('art.culture.details', ['id'=>$culture->id]) }}">
                                <img class="img-fluid" src="{{ asset('assets/backend/images/place/'.$culture->image) }}" alt="Image" style="height: 180px;width: 100%;">
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{ $culture->name }}</h3>
                            <p class="text-justify">
                                {!! Str::limit($culture->des,100) !!}
                            </p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="{{ route('art.culture.details', ['id'=>$culture->id]) }}">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->
                    @endforeach

                        {{ $cultures->links() }}

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
@endsection