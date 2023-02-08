@extends('backend.master')

@section('title')
    Edit History Place | History BD
@endsection

@section('content')
    <div class="span9">
        <div class="content">
            <div class="module">
                <div class="module-head">
                    <h3>Edit History Place</h3>
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

                    <form name="editPlace" action="{{ route('update.history.place') }}" method="POST" enctype="multipart/form-data" class="form-horizontal row-fluid">
                        @csrf
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Category <span class="text-red">*</span></label>
                            <div class="controls">
                                <select name="category_id" tabindex="1" class="span8">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category['name'] }}</option>
                                    @endforeach
                                </select>
                                <span class="text-red">{{ $errors->has('category_id') ? $errors->first('category_id') : '' }}</span>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">History Place Name <span class="text-red">*</span></label>
                            <div class="controls">
                                <input type="text" name="name" value="{{ $place['name'] }}" id="basicinput" class="span8">
                                <span class="text-red">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                <input type="hidden" name="id" value="{{ $place['id'] }}">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">History Place Image</label>
                            <div class="controls">
                                <input type="file" name="image" id="basicinput" class="span8">
                                @if($place->image)
                                    <a href="{{ asset('assets/backend/images/place/'.$place['image']) }}" target="_blank">
                                        <img src="{{ asset('assets/backend/images/place/'.$place['image']) }}" alt="Attached" style="height: 60px;width: 60px">
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Description</label>
                            <div class="controls">
                                <textarea name="des" id="editor1" class="span8" rows="5">{{ $place['des'] }}</textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Status</label>
                            <div class="controls">
                                <select name="status" tabindex="1" data-placeholder="Select here.." class="span8">
                                    @if($place->status == 1)
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

@section('js')
    <script>
        document.forms['editPlace'].elements['category_id'].value ='{{ $place->categoryName['id'] }}'
    </script>
@endsection