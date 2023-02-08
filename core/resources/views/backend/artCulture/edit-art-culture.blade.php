@extends('backend.master')

@section('title')
    Edit Art & Culture | History BD
@endsection

@section('content')
    <div class="span9">
        <div class="content">
            <div class="module">
                <div class="module-head">
                    <h3>Edit Art & Culture</h3>
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

                    <form name="editPlace" action="{{ route('update.art.culture') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-fluid">
                        @csrf
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Art & Culture Name <span class="text-red">*</span></label>
                            <div class="controls">
                                <input type="text" name="name" value="{{ $culture['name'] }}" id="basicinput" class="span8">
                                <span class="text-red">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                <input type="hidden" name="id" value="{{ $culture['id'] }}">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Art & Culture Image</label>
                            <div class="controls">
                                <input type="file" name="image" id="basicinput" class="span8">
                                @if($culture->image)
                                    <a href="{{ asset('assets/backend/images/place/'.$culture['image']) }}" target="_blank">
                                        <img src="{{ asset('assets/backend/images/place/'.$culture['image']) }}" alt="Attached" style="height: 60px;width: 60px">
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Description</label>
                            <div class="controls">
                                <textarea name="des" id="editor1" class="span8" rows="5">{{ $culture['des'] }}</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Status</label>
                            <div class="controls">
                                <select name="status" tabindex="1" data-placeholder="Select here.." class="span8">
                                    @if($culture->status == 1)
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    @else
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    @endif
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