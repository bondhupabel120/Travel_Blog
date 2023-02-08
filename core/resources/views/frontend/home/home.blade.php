@extends('frontend.master')

@section('title')
    Home | History BD
@endsection

@section('content')
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content" style="background-image: url({{ asset('assets/backend/images/place/'.$slider->image) }});background-size: cover;height: 700px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>{{ $slider->title }}</h1>
                            <p class="p-heading p-large">
                                {!! $slider->des !!}
                            </p>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2>{{ $about->title }}</h2>
                        <p>
                            {!! $about->des !!}
                        </p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('assets/backend/images/place/'.$about->image) }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->

    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Popular Historical Place</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    @foreach($popularHistories as $popularHistory)
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <a href="{{ route('history.place.details',['id'=>$popularHistory->id]) }}">
                                <img class="img-fluid" src="{{ asset('assets/backend/images/place/'.$popularHistory->image) }}" alt="alternative" style="height: 180px;width: 100%;">
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{ $popularHistory->name }}</h3>
                            <p class="text-justify">
                                {!! Str::limit($popularHistory->des, 100) !!}
                            </p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="{{ route('history.place.details',['id'=>$popularHistory->id]) }}">DETAILS</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->
                    @endforeach

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->

    <!-- Call Me -->
    <div id="callMe" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2>Get In Touch Using The Form</h2>
                        <p>
                            Eastern University or EU is a private university located in
                            Road 6, Block B, Ashulia Model Town, Savar, Dhaka-1345
                        </p>
                        <ul class="list-unstyled li-space-lg text-white">
                            <li class="address"><i class="fa fa-map-marker-alt pr-1"></i>Road 6, Block B,
                                Ashulia Model Town, Savar, Dhaka-1345</li>
                            <li><i class="fa fa-phone pr-1"></i>09602666651</li>
                            <li><i class="fa fa-envelope pr-1"></i>info@easternuni.edu.bd</li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Call Me Form -->
                    <form action="{{ route('submit.contact') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="lname" name="name" required>
                            <label class="label-control" for="lname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="lphone" name="phone" required>
                            <label class="label-control" for="lphone">Phone</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control-input" id="laddress" name="address" required></textarea>
                            <label class="label-control" for="laddress">Address</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control-submit-button" value="Submit">
                        </div>
                    </form>
                    <!-- end of call me form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of call me -->

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
                            <img class="img-fluid rounded-circle" src="{{ asset('assets/backend/images/place/'.$team->image) }}" alt="Team">
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