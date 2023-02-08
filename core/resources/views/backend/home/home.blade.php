@extends('backend.master')

@section('title')
    Admin Home | History BD
@endsection

@section('content')
    <div class="span9">
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
        <div class="content">
            <h2>Admin Dashboard</h2>
        </div>
        <!--/.content-->
    </div>
@endsection
