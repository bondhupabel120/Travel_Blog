@extends('backend.master')

@section('title')
    Update Slider | History BD
@endsection

@section('content')
    <div class="span9">
        <div class="content">
            <div class="module">
                <div class="module-head">
                    <h3>Update Slider</h3>
                </div>
                <div class="module-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <form name="editPlace" action="{{ route('update.slider') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-fluid">
                        @csrf
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Title <span class="text-red">*</span></label>
                            <div class="controls">
                                <input type="text" name="title" value="{{ $slider['title'] }}" id="basicinput" class="span8">
                                <span class="text-red">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                                <input type="hidden" name="id" value="{{ $slider['id'] }}">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Description</label>
                            <div class="controls">
                                <textarea name="des" class="span8" rows="5">{{ $slider['des'] }}</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Slider Image</label>
                            <div class="controls">
                                <input type="file" name="image" id="basicinput" class="span8">
                                @if($slider->image)
                                    <a href="{{ asset('assets/backend/images/place/'.$slider['image']) }}" target="_blank">
                                        <img src="{{ asset('assets/backend/images/place/'.$slider['image']) }}" alt="Attached" style="height: 60px;width: 60px">
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        .text-red{
            color: red;
        }
    </style>
@endsection