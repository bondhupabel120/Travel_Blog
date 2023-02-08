@extends('backend.master')

@section('title')
    Team Member | History BD
@endsection

@section('content')
    <div class="span9">
        <div class="content">
            <div class="module">
                <div class="module-head">
                    <h3>Add Team Member</h3>
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

                    <form action="{{ route('save.team') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-fluid">
                        @csrf
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Team Member Name <span class="text-red">*</span></label>
                            <div class="controls">
                                <input type="text" name="name" value="{{ old('name') }}" id="basicinput" class="span8">
                                <span class="text-red">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="basicinput">ID Number<span class="text-red">*</span></label>
                            <div class="controls">
                                <input type="text" name="roll" value="{{ old('roll') }}" id="basicinput" class="span8">
                                <span class="text-red">{{ $errors->has('roll') ? $errors->first('roll') : '' }}</span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Team Member Image</label>
                            <div class="controls">
                                <input type="file" value="{{ old('image') }}" name="image" id="basicinput" class="span8">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Status</label>
                            <div class="controls">
                                <select name="status" tabindex="1" data-placeholder="Select here.." class="span8">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
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
