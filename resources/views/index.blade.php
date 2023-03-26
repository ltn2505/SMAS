@extends('layout')

@section('content')
    <div class="col-sm-12">
        <div class="bg-light rounded h-100 p-4">
            @if (Session::has('notification'))
                <div class="alert alert-success">
                    {{ Session::get('notification') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div>
                <h3 style="float:left" class="mb-4">Manage Account</h3>
            </div>

            <div>
                <button style="float:right" type="button" class="btn btn-success rounded-pill m-2"><a style="color:white "
                        href="{{ route('account.create') }}"> + Add new account</a></button>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Account Name</th>
                        <th scope="col">Password</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Day of Birth</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Role</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($account as $ac)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $ac->account_name }}</td>
                            <td>{{ $ac->password }}</td>
                            <td>{{ $ac->full_name }}</td>
                            <td>{{ $ac->gender }}</td>
                            <td>{{ $ac->dob }}</td>
                            <td>{{ $ac->email }}</td>
                            <td>{{ $ac->phone_number }}</td>
                            <td>{{ $ac->role }}</td>
                            <td>
                                <form action="{{ route('account.destroy', $ac->id) }}" method="POST">
                                    <a href="{{ route('account.edit', $ac->id) }}" class="btn btn-info">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
