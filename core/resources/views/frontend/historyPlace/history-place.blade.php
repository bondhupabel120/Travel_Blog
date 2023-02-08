@extends('frontend.master')

@section('title')
    History Place | History BD
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

    @foreach($categories as $category)
    <!-- Services -->
    <div class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{ $category->name }}</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    @foreach($category->historyPlaceName as $history)
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <a href="{{ route('history.place.details', ['id'=>$history->id]) }}">
                                <img class="img-fluid" src="{{ asset('assets/backend/images/place/'.$history->image) }}" alt="alternative" style="height: 180px;width: 100%;">
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{ $history->name }}</h3>
                            <p class="text-justify">
                                {!! Str::limit($history->des, 100) !!}
                            </p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="{{ route('history.place.details', ['id'=>$history->id]) }}">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->
                    @endforeach

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
    @endforeach

@endsection