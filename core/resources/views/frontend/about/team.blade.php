@extends('frontend.master')

@section('title')
    About | History BD
@endsection

@section('content')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>ABOUT US</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Team -->
    <div id="intro" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Group Members</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    @foreach($teams as $team)
                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid rounded-circle" src="{{ asset('assets/backend/images/place/'.$team->image) }}" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large">{{ $team->name }}</p>
                        <p class="job-title">{{ $team->roll }}</p>
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->
                    @endforeach

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of team -->
@endsection