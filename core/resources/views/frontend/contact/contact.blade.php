@extends('frontend.master')

@section('title')
    Contact | History BD
@endsection

@section('content')
    <!-- Header -->
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>CONTACT US</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->

    <!-- Call Me -->
    <div id="callMe" class="form-1" style="background-color: whitesmoke">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACT</div>
                        <h2 style="color: black">Get In Touch Using The Form</h2>
                        <p style="color: black">
                            Eastern University or EU is a private university located in
                            Road 6, Block B, Ashulia Model Town, Savar, Dhaka-1345
                        </p>
                        <ul class="list-unstyled li-space-lg" style="color: black">
                            <li class="address"><i class="fa fa-map-marker-alt pr-1"></i>Road 6, Block B,
                                Ashulia Model Town, Savar, Dhaka-1345</li>
                            <li style="color: black"><i class="fa fa-phone pr-1"></i>09602666651</li>
                            <li style="color: black"><i class="fa fa-envelope pr-1"></i>info@easternuni.edu.bd</li>
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
@endsection