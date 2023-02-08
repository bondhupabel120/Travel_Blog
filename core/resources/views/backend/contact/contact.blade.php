@extends('backend.master')

@section('title')
    Show Contact | History BD
@endsection

@section('content')
    <div class="span9">
        <div class="content">
            <div class="module">
                <div class="module-head">
                    <h3>Show Contact</h3>
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
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($contacts as $contact)
                            <tr class="odd gradeX">
                                <td>{{ $i++ }}</td>
                                <td>{{ $contact['name'] }}</td>
                                <td>{{ $contact['phone'] }}</td>
                                <td>{{ $contact['address'] }}</td>
                                <td>
                                    <a href="#editCategory-{{ $contact->id }}" data-toggle="modal" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="editCategory-{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('delete.contact') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                Are you want to delete this?
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="id" value="{{ $contact->id }}">
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