@extends('backend.master')

@section('title')
    Manage Art & Culture | History BD
@endsection

@section('content')
    <div class="span9">
        <div class="content">
            <div class="module">
                <div class="module-head">
                    <h3>Manage Art & Culture</h3>
                </div>
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
                <div class="module-body table">
                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Art & Culture Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($cultures as $culture)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $culture['name'] }}</td>
                                <td>
                                    @if($culture->image)
                                        <a href="{{ asset('assets/backend/images/place/'.$culture['image']) }}" target="_blank">
                                            <img src="{{ asset('assets/backend/images/place/'.$culture['image']) }}" alt="Attached" style="height: 40px;width: 40px">
                                        </a>
                                    @endif
                                </td>
                                <td>{!! Str::limit($culture['des'],60) !!}</td>
                                <td>
                                    @if($culture->status == 1)
                                        <button class="btn btn-success">Active</button>
                                    @else
                                        <button class="btn btn-warning">Inactive</button>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('edit.art.culture',['id' => $culture->id]) }}" class="btn btn-primary">Edit</a>
                                    <a href="#editCompany-{{ $culture->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="editCompany-{{ $culture->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('delete.art.culture') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                Are you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="id" value="{{ $culture->id }}">
                                                <button type="button" class="btn btn-secondary pl-3 pr-3" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary pl-3 pr-3">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection